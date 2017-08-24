<?php

namespace ISETSO\UserBundle\EventListener;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;




class UserVoter extends Voter
{
	const ADD = 'Add';
	const EDIT = 'Edit';
	const VIEW = 'View';
	const DELETE = 'Delete';
	const MANAGER = 'Manager';

   /**
	* @var AccessDecisionManagerInterface
	*/
	private $decisionManager;

	public function __construct(AccessDecisionManagerInterface $decisionManager)
	{
		$this->decisionManager = $decisionManager;
	}

	protected function supports($attribute, $subject)
	{
		if (!in_array($attribute, array(self::ADD, self::EDIT, self::VIEW, self::DELETE , self::MANAGER))) {
			return false;
		}
		return true;
	}

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
	{

		$user = $token->getUser();
		if (!$user instanceof UserInterface) {
			return false;
		}

		if ($user->isSuperAdmin()) {
			return true;
		}
		
		/** @var String */
		$role = $subject;

		if (!$this->decisionManager->decide($token, array($role))){
			return false;
		}
		
		switch ($attribute) {
			case self::ADD:
			// si le utilisateur a le role admin
			
			// si le utilisateur a le droit
			if ($user->hasPermissions($role , self::ADD)) {
				return true;
			}
			break;

			case self::EDIT:

			if ($user->hasPermissions($role , self::EDIT)) {
				return true;
			}
			break;

			case self::MANAGER:

			if ($user->hasPermissions($role , self::MANAGER)) {
				return true;
			}
			break;

			case self::VIEW:
			
			if ($user->hasPermissions($role , self::VIEW)) {
				return true;
			}
			break;
			case self::DELETE:
			
			if ($user->hasPermissions($role , self::DELETE)) {
				return true;
			}
			break;

		}

	return false;

	}
}