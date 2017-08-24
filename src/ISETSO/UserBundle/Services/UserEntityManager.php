<?php

namespace ISETSO\UserBundle\Services;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ISETSO\UserBundle\Entity\User\UserHistory;

/**
 * @author Rami Sfari <rami2sfari@gmail.com>
 * @copyright Copyright (c) 2016, PFE
 */
class UserEntityManager
{
    const ADD = 'Add';
    const EDIT = 'Edit';
    const VIEW = 'View';
    const DELETE = 'Delete';
    const MANAGER = 'Manager';
    
	/**
	* @var Doctrine\ORM\EntityManager
	*/
	private $em;

    /**
    * @var Symfony\Component\Security\Core\Role\RoleHierarchy
    */
    private $roleHierarchy;

    /**
    * @var checker
    */
    private $checker;

	/**
	* @var Knp\Component\Pager\Paginator
	*/
	private $paginator;

	/**
	* @param Doctrine\ORM\EntityManager $em
	* @param Knp\Component\Pager\Paginator $paginator
	* @param checker $checker
    * @param Symfony\Component\Security\Core\Role\RoleHierarchy $roleHierarchy
	*/
	public function __construct($em ,$paginator, $checker,$roleHierarchy)
    {
        $this->em = $em;
        $this->paginator = $paginator;
        $this->checker = $checker;
        $this->roleHierarchy = $roleHierarchy;
    }

    /**
     * @return array
     */
    public function getExistingRoles()
    {
        $roles = array_keys($this->roleHierarchy->getRoles());

        foreach ($roles as $role) {
            $theRoles[$role] = $role;
        }
        return $theRoles;
    }

    /**
     * @param Repository $repository 
     * @param string $role 
     * @param User $user
     * @param string $searchField 
     * @return Query
     */
    public function getEntityBy($repository ,$user, $role , $form)
    {
        $query = null;

        if ($this->checker->isGranted('Manager',$role) && $user->isUser($user)){
            $query = $repository->findAll();
        }else 
        if ($this->checker->isGranted('View',$role) && $user->isUser($user)){
            $query = $repository->findByUser($user);
            
        }else{
            throw new AccessDeniedException('Access Denied', null);
        }

        if ($form->isSubmitted() && $form->isValid()){
            $query = $repository->findByAnything($query , $form->get('search')->getData());
        }
        
        return $query;
    }

    /**
     * @param User $user
     * @return Query
     */
    public function getNotificationByUser($user , $request)
    {
        $repository = $this->em->getRepository(UserHistory::class);
        
        return $this->createPaginator($repository->getAllNotification($user) ,$request);
    }


    /**
     * 
     * @param object $entity
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @return void
     */
    public function save ($entity , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param User $user
     * @param Symfony\Component\Form\Form $form
     * @return void
     */
    public function lock ($user){

        if ($user->isLocked()){
            $user->setLocked(false);
        }else{
            $user->setLocked(true);
        }
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * @param User $user
     * @param Symfony\Component\Form\Form $form
     * @return void
     */
    public function expire ($user , $form){

        if (!empty($form->get('dateExp')->getData())){
            $user->setExpiresAt($form->get('dateExp')->getData());
        }
        $user->setExpired($form->get('expired')->getData());
        
        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * @param object $entity
     * @param array $list
     * @param Symfony\Component\Form\Form $form
     * @param ISETSO\UserBundle\Entity\User\User $user
     * 
     * @return void
     */
    public function savePermission ($entity, $list , $form){

        $permisson = array();
        foreach ($list as $value) {
            if ($value != 'ROLE_USER'){
                $permisson[] = array($value => $form->get($value)->getData());
            }
        }
        $entity->setPermissions($permisson);
        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param object $entity
     * @return void
     */
    public function delete ($entity){

        foreach ($list as $value) {
            $this->em->remove($value);
        }
        
        $this->em->remove($entity);
        $this->em->flush();
    }

    /**
     * Creates Paginator.
     *
     * @param Query $query 
     * @param Symfony\Component\HttpFoundation\Request $request
     * @param int $nb_page  
     * @return Knp\Component\Pager\Paginator
     */
    public function createPaginator($query ,$request, $nb_page = 10)
    {

        return $this->paginator->paginate(
            $query/*requéte*/,
            $request->query->getInt('page', 1)/*page number*/,
            $nb_page /*limit pour page*/
        );
    }
}
?>
