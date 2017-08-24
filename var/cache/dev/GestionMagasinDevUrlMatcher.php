<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * GestionMagasinDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class GestionMagasinDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/ea91054')) {
            // _assetic_ea91054
            if ($pathinfo === '/css/ea91054.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ea91054',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ea91054',);
            }

            // _assetic_ea91054_0
            if ($pathinfo === '/css/ea91054_blue_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ea91054',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ea91054_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/9dd21eb')) {
            // _assetic_9dd21eb
            if ($pathinfo === '/js/9dd21eb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9dd21eb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9dd21eb',);
            }

            if (0 === strpos($pathinfo, '/js/9dd21eb_')) {
                // _assetic_9dd21eb_0
                if ($pathinfo === '/js/9dd21eb_jquery.multi-select.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9dd21eb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9dd21eb_0',);
                }

                // _assetic_9dd21eb_1
                if ($pathinfo === '/js/9dd21eb_icheck_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9dd21eb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9dd21eb_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/2bc3603')) {
            // _assetic_2bc3603
            if ($pathinfo === '/css/2bc3603.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2bc3603',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2bc3603',);
            }

            if (0 === strpos($pathinfo, '/css/2bc3603_')) {
                // _assetic_2bc3603_0
                if ($pathinfo === '/css/2bc3603_multi-select_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2bc3603',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2bc3603_0',);
                }

                // _assetic_2bc3603_1
                if ($pathinfo === '/css/2bc3603_select2_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2bc3603',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_2bc3603_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/9ebbd1d')) {
            // _assetic_9ebbd1d
            if ($pathinfo === '/js/9ebbd1d.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9ebbd1d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9ebbd1d',);
            }

            if (0 === strpos($pathinfo, '/js/9ebbd1d_')) {
                // _assetic_9ebbd1d_0
                if ($pathinfo === '/js/9ebbd1d_jquery.multi-select.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ebbd1d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9ebbd1d_0',);
                }

                // _assetic_9ebbd1d_1
                if ($pathinfo === '/js/9ebbd1d_icheck_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ebbd1d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9ebbd1d_1',);
                }

                // _assetic_9ebbd1d_2
                if ($pathinfo === '/js/9ebbd1d_select2.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9ebbd1d',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_9ebbd1d_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/a57f7fa')) {
            // _assetic_a57f7fa
            if ($pathinfo === '/css/a57f7fa.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a57f7fa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a57f7fa',);
            }

            if (0 === strpos($pathinfo, '/css/a57f7fa_')) {
                // _assetic_a57f7fa_0
                if ($pathinfo === '/css/a57f7fa_prettify_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a57f7fa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a57f7fa_0',);
                }

                // _assetic_a57f7fa_1
                if ($pathinfo === '/css/a57f7fa_blue_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a57f7fa',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_a57f7fa_1',);
                }

                // _assetic_a57f7fa_2
                if ($pathinfo === '/css/a57f7fa_multi-select_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a57f7fa',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_a57f7fa_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/4386f7c')) {
            // _assetic_4386f7c
            if ($pathinfo === '/js/4386f7c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4386f7c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4386f7c',);
            }

            if (0 === strpos($pathinfo, '/js/4386f7c_')) {
                // _assetic_4386f7c_0
                if ($pathinfo === '/js/4386f7c_moment.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4386f7c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4386f7c_0',);
                }

                // _assetic_4386f7c_1
                if ($pathinfo === '/js/4386f7c_bootstrap-datepicker_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4386f7c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4386f7c_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/347e025')) {
            // _assetic_347e025
            if ($pathinfo === '/css/347e025.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_347e025',);
            }

            if (0 === strpos($pathinfo, '/css/347e025_')) {
                // _assetic_347e025_0
                if ($pathinfo === '/css/347e025__all_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_347e025_0',);
                }

                // _assetic_347e025_1
                if ($pathinfo === '/css/347e025_font-awesome.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_347e025_1',);
                }

                // _assetic_347e025_2
                if ($pathinfo === '/css/347e025_themify-icons_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_347e025_2',);
                }

                // _assetic_347e025_3
                if ($pathinfo === '/css/347e025_styles_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_347e025_3',);
                }

                // _assetic_347e025_4
                if ($pathinfo === '/css/347e025_animate_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '347e025',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_347e025_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/0b27e19')) {
            // _assetic_0b27e19
            if ($pathinfo === '/js/0b27e19.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0b27e19',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0b27e19',);
            }

            if (0 === strpos($pathinfo, '/js/0b27e19_')) {
                // _assetic_0b27e19_0
                if ($pathinfo === '/js/0b27e19_jquery-1.10.2.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0b27e19',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0b27e19_0',);
                }

                // _assetic_0b27e19_1
                if ($pathinfo === '/js/0b27e19_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0b27e19',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0b27e19_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/e3849eb')) {
            // _assetic_e3849eb
            if ($pathinfo === '/css/e3849eb.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3849eb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e3849eb',);
            }

            if (0 === strpos($pathinfo, '/css/e3849eb_')) {
                if (0 === strpos($pathinfo, '/css/e3849eb_dataTables.')) {
                    // _assetic_e3849eb_0
                    if ($pathinfo === '/css/e3849eb_dataTables.bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3849eb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e3849eb_0',);
                    }

                    // _assetic_e3849eb_1
                    if ($pathinfo === '/css/e3849eb_dataTables.themify_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3849eb',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e3849eb_1',);
                    }

                }

                // _assetic_e3849eb_2
                if ($pathinfo === '/css/e3849eb_select2_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3849eb',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e3849eb_2',);
                }

                // _assetic_e3849eb_3
                if ($pathinfo === '/css/e3849eb_cssload-finger_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3849eb',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_e3849eb_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/36a000b')) {
            // _assetic_36a000b
            if ($pathinfo === '/js/36a000b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_36a000b',);
            }

            if (0 === strpos($pathinfo, '/js/36a000b_')) {
                // _assetic_36a000b_0
                if ($pathinfo === '/js/36a000b_jquery.dataTables_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_36a000b_0',);
                }

                if (0 === strpos($pathinfo, '/js/36a000b_data')) {
                    // _assetic_36a000b_1
                    if ($pathinfo === '/js/36a000b_dataTables.bootstrap_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_36a000b_1',);
                    }

                    // _assetic_36a000b_2
                    if ($pathinfo === '/js/36a000b_datatables_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_36a000b_2',);
                    }

                }

                // _assetic_36a000b_3
                if ($pathinfo === '/js/36a000b_select2.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_36a000b_3',);
                }

                // _assetic_36a000b_4
                if ($pathinfo === '/js/36a000b_discharge_article_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_36a000b_4',);
                }

                // _assetic_36a000b_5
                if ($pathinfo === '/js/36a000b_add_discharge_user_article_from_subStore_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_36a000b_5',);
                }

                // _assetic_36a000b_6
                if ($pathinfo === '/js/36a000b_moment.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_36a000b_6',);
                }

                // _assetic_36a000b_7
                if ($pathinfo === '/js/36a000b_bootstrap-datepicker_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_36a000b_7',);
                }

                // _assetic_36a000b_8
                if ($pathinfo === '/js/36a000b_date_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '36a000b',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_36a000b_8',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/7cfe8d1')) {
            // _assetic_7cfe8d1
            if ($pathinfo === '/css/7cfe8d1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7cfe8d1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7cfe8d1',);
            }

            if (0 === strpos($pathinfo, '/css/7cfe8d1_dataTables.')) {
                // _assetic_7cfe8d1_0
                if ($pathinfo === '/css/7cfe8d1_dataTables.bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7cfe8d1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7cfe8d1_0',);
                }

                // _assetic_7cfe8d1_1
                if ($pathinfo === '/css/7cfe8d1_dataTables.themify_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7cfe8d1',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7cfe8d1_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/b81ca42')) {
                // _assetic_b81ca42
                if ($pathinfo === '/js/b81ca42.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b81ca42',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b81ca42',);
                }

                if (0 === strpos($pathinfo, '/js/b81ca42_')) {
                    // _assetic_b81ca42_0
                    if ($pathinfo === '/js/b81ca42_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b81ca42',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b81ca42_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/b81ca42_data')) {
                        // _assetic_b81ca42_1
                        if ($pathinfo === '/js/b81ca42_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b81ca42',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b81ca42_1',);
                        }

                        // _assetic_b81ca42_2
                        if ($pathinfo === '/js/b81ca42_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b81ca42',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b81ca42_2',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/410b980')) {
                // _assetic_410b980
                if ($pathinfo === '/js/410b980.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_410b980',);
                }

                if (0 === strpos($pathinfo, '/js/410b980_')) {
                    // _assetic_410b980_0
                    if ($pathinfo === '/js/410b980_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_410b980_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/410b980_data')) {
                        // _assetic_410b980_1
                        if ($pathinfo === '/js/410b980_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_410b980_1',);
                        }

                        // _assetic_410b980_2
                        if ($pathinfo === '/js/410b980_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_410b980_2',);
                        }

                    }

                    // _assetic_410b980_3
                    if ($pathinfo === '/js/410b980_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_410b980_3',);
                    }

                    // _assetic_410b980_4
                    if ($pathinfo === '/js/410b980_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_410b980_4',);
                    }

                    // _assetic_410b980_5
                    if ($pathinfo === '/js/410b980_edit_discharge_user_article_from_subStore_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_410b980_5',);
                    }

                    // _assetic_410b980_6
                    if ($pathinfo === '/js/410b980_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_410b980_6',);
                    }

                    // _assetic_410b980_7
                    if ($pathinfo === '/js/410b980_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_410b980_7',);
                    }

                    // _assetic_410b980_8
                    if ($pathinfo === '/js/410b980_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '410b980',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_410b980_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/4866ff2')) {
            // _assetic_4866ff2
            if ($pathinfo === '/css/4866ff2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4866ff2',);
            }

            if (0 === strpos($pathinfo, '/css/4866ff2_')) {
                if (0 === strpos($pathinfo, '/css/4866ff2_dataTables.')) {
                    // _assetic_4866ff2_0
                    if ($pathinfo === '/css/4866ff2_dataTables.bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4866ff2_0',);
                    }

                    // _assetic_4866ff2_1
                    if ($pathinfo === '/css/4866ff2_dataTables.themify_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4866ff2_1',);
                    }

                }

                // _assetic_4866ff2_2
                if ($pathinfo === '/css/4866ff2_select2_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4866ff2_2',);
                }

                // _assetic_4866ff2_3
                if ($pathinfo === '/css/4866ff2_cssload-finger_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_4866ff2_3',);
                }

                // _assetic_4866ff2_4
                if ($pathinfo === '/css/4866ff2_book-animation_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4866ff2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_4866ff2_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/4')) {
                if (0 === strpos($pathinfo, '/js/4a313ca')) {
                    // _assetic_4a313ca
                    if ($pathinfo === '/js/4a313ca.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4a313ca',);
                    }

                    if (0 === strpos($pathinfo, '/js/4a313ca_')) {
                        // _assetic_4a313ca_0
                        if ($pathinfo === '/js/4a313ca_jquery.dataTables_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4a313ca_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/4a313ca_data')) {
                            // _assetic_4a313ca_1
                            if ($pathinfo === '/js/4a313ca_dataTables.bootstrap_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4a313ca_1',);
                            }

                            // _assetic_4a313ca_2
                            if ($pathinfo === '/js/4a313ca_datatables_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4a313ca_2',);
                            }

                        }

                        // _assetic_4a313ca_3
                        if ($pathinfo === '/js/4a313ca_select2.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_4a313ca_3',);
                        }

                        // _assetic_4a313ca_4
                        if ($pathinfo === '/js/4a313ca_return_article_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_4a313ca_4',);
                        }

                        // _assetic_4a313ca_5
                        if ($pathinfo === '/js/4a313ca_add_return_article_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_4a313ca_5',);
                        }

                        // _assetic_4a313ca_6
                        if ($pathinfo === '/js/4a313ca_moment.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_4a313ca_6',);
                        }

                        // _assetic_4a313ca_7
                        if ($pathinfo === '/js/4a313ca_bootstrap-datepicker_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_4a313ca_7',);
                        }

                        // _assetic_4a313ca_8
                        if ($pathinfo === '/js/4a313ca_date_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4a313ca',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_4a313ca_8',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/4cbf7ba')) {
                    // _assetic_4cbf7ba
                    if ($pathinfo === '/js/4cbf7ba.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba',);
                    }

                    if (0 === strpos($pathinfo, '/js/4cbf7ba_')) {
                        // _assetic_4cbf7ba_0
                        if ($pathinfo === '/js/4cbf7ba_jquery.dataTables_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/4cbf7ba_data')) {
                            // _assetic_4cbf7ba_1
                            if ($pathinfo === '/js/4cbf7ba_dataTables.bootstrap_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_1',);
                            }

                            // _assetic_4cbf7ba_2
                            if ($pathinfo === '/js/4cbf7ba_datatables_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_2',);
                            }

                        }

                        // _assetic_4cbf7ba_3
                        if ($pathinfo === '/js/4cbf7ba_select2.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_3',);
                        }

                        // _assetic_4cbf7ba_4
                        if ($pathinfo === '/js/4cbf7ba_return_article_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_4',);
                        }

                        // _assetic_4cbf7ba_5
                        if ($pathinfo === '/js/4cbf7ba_edit_return_article_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_5',);
                        }

                        // _assetic_4cbf7ba_6
                        if ($pathinfo === '/js/4cbf7ba_moment.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_6',);
                        }

                        // _assetic_4cbf7ba_7
                        if ($pathinfo === '/js/4cbf7ba_bootstrap-datepicker_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_7',);
                        }

                        // _assetic_4cbf7ba_8
                        if ($pathinfo === '/js/4cbf7ba_date_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4cbf7ba',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_4cbf7ba_8',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/2956017')) {
                // _assetic_2956017
                if ($pathinfo === '/js/2956017.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 2956017,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2956017',);
                }

                if (0 === strpos($pathinfo, '/js/2956017_')) {
                    // _assetic_2956017_0
                    if ($pathinfo === '/js/2956017_moment.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 2956017,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2956017_0',);
                    }

                    // _assetic_2956017_1
                    if ($pathinfo === '/js/2956017_bootstrap-datepicker_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 2956017,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_2956017_1',);
                    }

                    // _assetic_2956017_2
                    if ($pathinfo === '/js/2956017_dateRange_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 2956017,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_2956017_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/56ec73a')) {
                // _assetic_56ec73a
                if ($pathinfo === '/css/56ec73a.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '56ec73a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_56ec73a',);
                }

                if (0 === strpos($pathinfo, '/css/56ec73a_')) {
                    // _assetic_56ec73a_0
                    if ($pathinfo === '/css/56ec73a_product_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56ec73a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_56ec73a_0',);
                    }

                    // _assetic_56ec73a_1
                    if ($pathinfo === '/css/56ec73a_jquery-confirm_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56ec73a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_56ec73a_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/6c0ca7c')) {
                // _assetic_6c0ca7c
                if ($pathinfo === '/css/6c0ca7c.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6c0ca7c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6c0ca7c',);
                }

                if (0 === strpos($pathinfo, '/css/6c0ca7c_')) {
                    // _assetic_6c0ca7c_0
                    if ($pathinfo === '/css/6c0ca7c_font-awesome.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6c0ca7c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6c0ca7c_0',);
                    }

                    // _assetic_6c0ca7c_1
                    if ($pathinfo === '/css/6c0ca7c_themify-icons_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6c0ca7c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6c0ca7c_1',);
                    }

                    // _assetic_6c0ca7c_2
                    if ($pathinfo === '/css/6c0ca7c_styles_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6c0ca7c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6c0ca7c_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/f4ea94a')) {
                // _assetic_f4ea94a
                if ($pathinfo === '/js/f4ea94a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f4ea94a',);
                }

                if (0 === strpos($pathinfo, '/js/f4ea94a_')) {
                    // _assetic_f4ea94a_0
                    if ($pathinfo === '/js/f4ea94a_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/f4ea94a_data')) {
                        // _assetic_f4ea94a_1
                        if ($pathinfo === '/js/f4ea94a_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_1',);
                        }

                        // _assetic_f4ea94a_2
                        if ($pathinfo === '/js/f4ea94a_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_2',);
                        }

                    }

                    // _assetic_f4ea94a_3
                    if ($pathinfo === '/js/f4ea94a_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_3',);
                    }

                    // _assetic_f4ea94a_4
                    if ($pathinfo === '/js/f4ea94a_Supporting-Document_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_4',);
                    }

                    // _assetic_f4ea94a_5
                    if ($pathinfo === '/js/f4ea94a_add_journal_durable_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_5',);
                    }

                    // _assetic_f4ea94a_6
                    if ($pathinfo === '/js/f4ea94a_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_6',);
                    }

                    // _assetic_f4ea94a_7
                    if ($pathinfo === '/js/f4ea94a_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_7',);
                    }

                    // _assetic_f4ea94a_8
                    if ($pathinfo === '/js/f4ea94a_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4ea94a',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_f4ea94a_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/77f9add')) {
                // _assetic_77f9add
                if ($pathinfo === '/js/77f9add.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_77f9add',);
                }

                if (0 === strpos($pathinfo, '/js/77f9add_')) {
                    // _assetic_77f9add_0
                    if ($pathinfo === '/js/77f9add_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_77f9add_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/77f9add_data')) {
                        // _assetic_77f9add_1
                        if ($pathinfo === '/js/77f9add_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_77f9add_1',);
                        }

                        // _assetic_77f9add_2
                        if ($pathinfo === '/js/77f9add_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_77f9add_2',);
                        }

                    }

                    // _assetic_77f9add_3
                    if ($pathinfo === '/js/77f9add_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_77f9add_3',);
                    }

                    // _assetic_77f9add_4
                    if ($pathinfo === '/js/77f9add_moment.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_77f9add_4',);
                    }

                    // _assetic_77f9add_5
                    if ($pathinfo === '/js/77f9add_bootstrap-datepicker_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_77f9add_5',);
                    }

                    // _assetic_77f9add_6
                    if ($pathinfo === '/js/77f9add_date_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_77f9add_6',);
                    }

                    // _assetic_77f9add_7
                    if ($pathinfo === '/js/77f9add_Supporting-Document-edit_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_77f9add_7',);
                    }

                    // _assetic_77f9add_8
                    if ($pathinfo === '/js/77f9add_edit_journal_durable_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '77f9add',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_77f9add_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/4712c5a')) {
                // _assetic_4712c5a
                if ($pathinfo === '/js/4712c5a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4712c5a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4712c5a',);
                }

                // _assetic_4712c5a_0
                if ($pathinfo === '/js/4712c5a_article_durable_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4712c5a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4712c5a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/215c605')) {
                // _assetic_215c605
                if ($pathinfo === '/js/215c605.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_215c605',);
                }

                if (0 === strpos($pathinfo, '/js/215c605_')) {
                    // _assetic_215c605_0
                    if ($pathinfo === '/js/215c605_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_215c605_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/215c605_data')) {
                        // _assetic_215c605_1
                        if ($pathinfo === '/js/215c605_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_215c605_1',);
                        }

                        // _assetic_215c605_2
                        if ($pathinfo === '/js/215c605_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_215c605_2',);
                        }

                    }

                    // _assetic_215c605_3
                    if ($pathinfo === '/js/215c605_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_215c605_3',);
                    }

                    // _assetic_215c605_4
                    if ($pathinfo === '/js/215c605_order_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_215c605_4',);
                    }

                    // _assetic_215c605_5
                    if ($pathinfo === '/js/215c605_add_order_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_215c605_5',);
                    }

                    // _assetic_215c605_6
                    if ($pathinfo === '/js/215c605_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_215c605_6',);
                    }

                    // _assetic_215c605_7
                    if ($pathinfo === '/js/215c605_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_215c605_7',);
                    }

                    // _assetic_215c605_8
                    if ($pathinfo === '/js/215c605_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '215c605',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_215c605_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/b89dcad')) {
                // _assetic_b89dcad
                if ($pathinfo === '/js/b89dcad.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b89dcad',);
                }

                if (0 === strpos($pathinfo, '/js/b89dcad_')) {
                    // _assetic_b89dcad_0
                    if ($pathinfo === '/js/b89dcad_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b89dcad_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/b89dcad_data')) {
                        // _assetic_b89dcad_1
                        if ($pathinfo === '/js/b89dcad_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b89dcad_1',);
                        }

                        // _assetic_b89dcad_2
                        if ($pathinfo === '/js/b89dcad_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b89dcad_2',);
                        }

                    }

                    // _assetic_b89dcad_3
                    if ($pathinfo === '/js/b89dcad_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_b89dcad_3',);
                    }

                    // _assetic_b89dcad_4
                    if ($pathinfo === '/js/b89dcad_order_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_b89dcad_4',);
                    }

                    // _assetic_b89dcad_5
                    if ($pathinfo === '/js/b89dcad_edit_order_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_b89dcad_5',);
                    }

                    // _assetic_b89dcad_6
                    if ($pathinfo === '/js/b89dcad_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_b89dcad_6',);
                    }

                    // _assetic_b89dcad_7
                    if ($pathinfo === '/js/b89dcad_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_b89dcad_7',);
                    }

                    // _assetic_b89dcad_8
                    if ($pathinfo === '/js/b89dcad_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b89dcad',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_b89dcad_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/06ba4b8')) {
                // _assetic_06ba4b8
                if ($pathinfo === '/js/06ba4b8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_06ba4b8',);
                }

                if (0 === strpos($pathinfo, '/js/06ba4b8_')) {
                    // _assetic_06ba4b8_0
                    if ($pathinfo === '/js/06ba4b8_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/06ba4b8_data')) {
                        // _assetic_06ba4b8_1
                        if ($pathinfo === '/js/06ba4b8_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_1',);
                        }

                        // _assetic_06ba4b8_2
                        if ($pathinfo === '/js/06ba4b8_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_2',);
                        }

                    }

                    // _assetic_06ba4b8_3
                    if ($pathinfo === '/js/06ba4b8_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_3',);
                    }

                    // _assetic_06ba4b8_4
                    if ($pathinfo === '/js/06ba4b8_return_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_4',);
                    }

                    // _assetic_06ba4b8_5
                    if ($pathinfo === '/js/06ba4b8_add_return_article_toSubStore_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_5',);
                    }

                    // _assetic_06ba4b8_6
                    if ($pathinfo === '/js/06ba4b8_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_6',);
                    }

                    // _assetic_06ba4b8_7
                    if ($pathinfo === '/js/06ba4b8_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_7',);
                    }

                    // _assetic_06ba4b8_8
                    if ($pathinfo === '/js/06ba4b8_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '06ba4b8',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_06ba4b8_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/66726f0')) {
                // _assetic_66726f0
                if ($pathinfo === '/js/66726f0.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_66726f0',);
                }

                if (0 === strpos($pathinfo, '/js/66726f0_')) {
                    // _assetic_66726f0_0
                    if ($pathinfo === '/js/66726f0_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_66726f0_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/66726f0_data')) {
                        // _assetic_66726f0_1
                        if ($pathinfo === '/js/66726f0_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_66726f0_1',);
                        }

                        // _assetic_66726f0_2
                        if ($pathinfo === '/js/66726f0_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_66726f0_2',);
                        }

                    }

                    // _assetic_66726f0_3
                    if ($pathinfo === '/js/66726f0_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_66726f0_3',);
                    }

                    // _assetic_66726f0_4
                    if ($pathinfo === '/js/66726f0_return_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_66726f0_4',);
                    }

                    // _assetic_66726f0_5
                    if ($pathinfo === '/js/66726f0_edit_return_article_toSubStore_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_66726f0_5',);
                    }

                    // _assetic_66726f0_6
                    if ($pathinfo === '/js/66726f0_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_66726f0_6',);
                    }

                    // _assetic_66726f0_7
                    if ($pathinfo === '/js/66726f0_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_66726f0_7',);
                    }

                    // _assetic_66726f0_8
                    if ($pathinfo === '/js/66726f0_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66726f0',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_66726f0_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/1752835')) {
                // _assetic_1752835
                if ($pathinfo === '/js/1752835.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1752835',);
                }

                if (0 === strpos($pathinfo, '/js/1752835_')) {
                    // _assetic_1752835_0
                    if ($pathinfo === '/js/1752835_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1752835_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/1752835_data')) {
                        // _assetic_1752835_1
                        if ($pathinfo === '/js/1752835_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1752835_1',);
                        }

                        // _assetic_1752835_2
                        if ($pathinfo === '/js/1752835_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1752835_2',);
                        }

                    }

                    // _assetic_1752835_3
                    if ($pathinfo === '/js/1752835_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1752835_3',);
                    }

                    // _assetic_1752835_4
                    if ($pathinfo === '/js/1752835_Supporting-Document_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_1752835_4',);
                    }

                    // _assetic_1752835_5
                    if ($pathinfo === '/js/1752835_add_journal_consumable_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_1752835_5',);
                    }

                    // _assetic_1752835_6
                    if ($pathinfo === '/js/1752835_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_1752835_6',);
                    }

                    // _assetic_1752835_7
                    if ($pathinfo === '/js/1752835_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_1752835_7',);
                    }

                    // _assetic_1752835_8
                    if ($pathinfo === '/js/1752835_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 1752835,  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_1752835_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/bbd5968')) {
                // _assetic_bbd5968
                if ($pathinfo === '/js/bbd5968.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bbd5968',);
                }

                if (0 === strpos($pathinfo, '/js/bbd5968_')) {
                    // _assetic_bbd5968_0
                    if ($pathinfo === '/js/bbd5968_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bbd5968_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/bbd5968_data')) {
                        // _assetic_bbd5968_1
                        if ($pathinfo === '/js/bbd5968_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bbd5968_1',);
                        }

                        // _assetic_bbd5968_2
                        if ($pathinfo === '/js/bbd5968_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bbd5968_2',);
                        }

                    }

                    // _assetic_bbd5968_3
                    if ($pathinfo === '/js/bbd5968_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bbd5968_3',);
                    }

                    // _assetic_bbd5968_4
                    if ($pathinfo === '/js/bbd5968_moment.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bbd5968_4',);
                    }

                    // _assetic_bbd5968_5
                    if ($pathinfo === '/js/bbd5968_bootstrap-datepicker_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bbd5968_5',);
                    }

                    // _assetic_bbd5968_6
                    if ($pathinfo === '/js/bbd5968_date_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bbd5968_6',);
                    }

                    // _assetic_bbd5968_7
                    if ($pathinfo === '/js/bbd5968_Supporting-Document-edit_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bbd5968_7',);
                    }

                    // _assetic_bbd5968_8
                    if ($pathinfo === '/js/bbd5968_edit_journal_consumable_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbd5968',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bbd5968_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/252d411')) {
                // _assetic_252d411
                if ($pathinfo === '/js/252d411.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_252d411',);
                }

                if (0 === strpos($pathinfo, '/js/252d411_')) {
                    // _assetic_252d411_0
                    if ($pathinfo === '/js/252d411_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_252d411_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/252d411_data')) {
                        // _assetic_252d411_1
                        if ($pathinfo === '/js/252d411_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_252d411_1',);
                        }

                        // _assetic_252d411_2
                        if ($pathinfo === '/js/252d411_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_252d411_2',);
                        }

                    }

                    // _assetic_252d411_3
                    if ($pathinfo === '/js/252d411_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_252d411_3',);
                    }

                    // _assetic_252d411_4
                    if ($pathinfo === '/js/252d411_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_252d411_4',);
                    }

                    // _assetic_252d411_5
                    if ($pathinfo === '/js/252d411_add_discharge_magazine_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_252d411_5',);
                    }

                    // _assetic_252d411_6
                    if ($pathinfo === '/js/252d411_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_252d411_6',);
                    }

                    // _assetic_252d411_7
                    if ($pathinfo === '/js/252d411_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_252d411_7',);
                    }

                    // _assetic_252d411_8
                    if ($pathinfo === '/js/252d411_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '252d411',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_252d411_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/eb1fce6')) {
                // _assetic_eb1fce6
                if ($pathinfo === '/js/eb1fce6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_eb1fce6',);
                }

                if (0 === strpos($pathinfo, '/js/eb1fce6_')) {
                    // _assetic_eb1fce6_0
                    if ($pathinfo === '/js/eb1fce6_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/eb1fce6_data')) {
                        // _assetic_eb1fce6_1
                        if ($pathinfo === '/js/eb1fce6_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_1',);
                        }

                        // _assetic_eb1fce6_2
                        if ($pathinfo === '/js/eb1fce6_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_2',);
                        }

                    }

                    // _assetic_eb1fce6_3
                    if ($pathinfo === '/js/eb1fce6_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_3',);
                    }

                    // _assetic_eb1fce6_4
                    if ($pathinfo === '/js/eb1fce6_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_4',);
                    }

                    // _assetic_eb1fce6_5
                    if ($pathinfo === '/js/eb1fce6_edit_discharge_store_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_5',);
                    }

                    // _assetic_eb1fce6_6
                    if ($pathinfo === '/js/eb1fce6_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_6',);
                    }

                    // _assetic_eb1fce6_7
                    if ($pathinfo === '/js/eb1fce6_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_7',);
                    }

                    // _assetic_eb1fce6_8
                    if ($pathinfo === '/js/eb1fce6_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'eb1fce6',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_eb1fce6_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/19f63d5')) {
                // _assetic_19f63d5
                if ($pathinfo === '/js/19f63d5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_19f63d5',);
                }

                if (0 === strpos($pathinfo, '/js/19f63d5_')) {
                    // _assetic_19f63d5_0
                    if ($pathinfo === '/js/19f63d5_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_19f63d5_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/19f63d5_data')) {
                        // _assetic_19f63d5_1
                        if ($pathinfo === '/js/19f63d5_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_19f63d5_1',);
                        }

                        // _assetic_19f63d5_2
                        if ($pathinfo === '/js/19f63d5_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_19f63d5_2',);
                        }

                    }

                    // _assetic_19f63d5_3
                    if ($pathinfo === '/js/19f63d5_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_19f63d5_3',);
                    }

                    // _assetic_19f63d5_4
                    if ($pathinfo === '/js/19f63d5_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_19f63d5_4',);
                    }

                    // _assetic_19f63d5_5
                    if ($pathinfo === '/js/19f63d5_add_discharge_local_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_19f63d5_5',);
                    }

                    // _assetic_19f63d5_6
                    if ($pathinfo === '/js/19f63d5_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_19f63d5_6',);
                    }

                    // _assetic_19f63d5_7
                    if ($pathinfo === '/js/19f63d5_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_19f63d5_7',);
                    }

                    // _assetic_19f63d5_8
                    if ($pathinfo === '/js/19f63d5_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '19f63d5',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_19f63d5_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/fab5ff4')) {
                // _assetic_fab5ff4
                if ($pathinfo === '/js/fab5ff4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fab5ff4',);
                }

                if (0 === strpos($pathinfo, '/js/fab5ff4_')) {
                    // _assetic_fab5ff4_0
                    if ($pathinfo === '/js/fab5ff4_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/fab5ff4_data')) {
                        // _assetic_fab5ff4_1
                        if ($pathinfo === '/js/fab5ff4_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_1',);
                        }

                        // _assetic_fab5ff4_2
                        if ($pathinfo === '/js/fab5ff4_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_2',);
                        }

                    }

                    // _assetic_fab5ff4_3
                    if ($pathinfo === '/js/fab5ff4_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_3',);
                    }

                    // _assetic_fab5ff4_4
                    if ($pathinfo === '/js/fab5ff4_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_4',);
                    }

                    // _assetic_fab5ff4_5
                    if ($pathinfo === '/js/fab5ff4_edit_discharge_local_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_5',);
                    }

                    // _assetic_fab5ff4_6
                    if ($pathinfo === '/js/fab5ff4_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_6',);
                    }

                    // _assetic_fab5ff4_7
                    if ($pathinfo === '/js/fab5ff4_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_7',);
                    }

                    // _assetic_fab5ff4_8
                    if ($pathinfo === '/js/fab5ff4_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fab5ff4',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_fab5ff4_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/8aeb3a8')) {
            // _assetic_8aeb3a8
            if ($pathinfo === '/css/8aeb3a8.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8aeb3a8',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8aeb3a8',);
            }

            // _assetic_8aeb3a8_0
            if ($pathinfo === '/css/8aeb3a8_switchery_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8aeb3a8',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8aeb3a8_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/81450e8')) {
                // _assetic_81450e8
                if ($pathinfo === '/js/81450e8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_81450e8',);
                }

                if (0 === strpos($pathinfo, '/js/81450e8_')) {
                    if (0 === strpos($pathinfo, '/js/81450e8_jquery.flot.')) {
                        // _assetic_81450e8_0
                        if ($pathinfo === '/js/81450e8_jquery.flot.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_81450e8_0',);
                        }

                        // _assetic_81450e8_1
                        if ($pathinfo === '/js/81450e8_jquery.flot.tooltip.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_81450e8_1',);
                        }

                        if (0 === strpos($pathinfo, '/js/81450e8_jquery.flot.s')) {
                            // _assetic_81450e8_2
                            if ($pathinfo === '/js/81450e8_jquery.flot.spline_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_81450e8_2',);
                            }

                            // _assetic_81450e8_3
                            if ($pathinfo === '/js/81450e8_jquery.flot.stack.min_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_81450e8_3',);
                            }

                        }

                        // _assetic_81450e8_4
                        if ($pathinfo === '/js/81450e8_jquery.flot.resize_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_81450e8_4',);
                        }

                    }

                    // _assetic_81450e8_5
                    if ($pathinfo === '/js/81450e8_switchery_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_81450e8_5',);
                    }

                    // _assetic_81450e8_6
                    if ($pathinfo === '/js/81450e8_raphael.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_81450e8_6',);
                    }

                    // _assetic_81450e8_7
                    if ($pathinfo === '/js/81450e8_morris.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_81450e8_7',);
                    }

                    // _assetic_81450e8_8
                    if ($pathinfo === '/js/81450e8_dashboard_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '81450e8',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_81450e8_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/c626016')) {
                // _assetic_c626016
                if ($pathinfo === '/js/c626016.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c626016',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c626016',);
                }

                // _assetic_c626016_0
                if ($pathinfo === '/js/c626016_article_consumable_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c626016',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c626016_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/e2fb23a')) {
                // _assetic_e2fb23a
                if ($pathinfo === '/js/e2fb23a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e2fb23a',);
                }

                if (0 === strpos($pathinfo, '/js/e2fb23a_')) {
                    // _assetic_e2fb23a_0
                    if ($pathinfo === '/js/e2fb23a_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/e2fb23a_data')) {
                        // _assetic_e2fb23a_1
                        if ($pathinfo === '/js/e2fb23a_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_1',);
                        }

                        // _assetic_e2fb23a_2
                        if ($pathinfo === '/js/e2fb23a_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_2',);
                        }

                    }

                    // _assetic_e2fb23a_3
                    if ($pathinfo === '/js/e2fb23a_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_3',);
                    }

                    // _assetic_e2fb23a_4
                    if ($pathinfo === '/js/e2fb23a_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_4',);
                    }

                    // _assetic_e2fb23a_5
                    if ($pathinfo === '/js/e2fb23a_add_discharge_user_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_5',);
                    }

                    // _assetic_e2fb23a_6
                    if ($pathinfo === '/js/e2fb23a_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_6',);
                    }

                    // _assetic_e2fb23a_7
                    if ($pathinfo === '/js/e2fb23a_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_7',);
                    }

                    // _assetic_e2fb23a_8
                    if ($pathinfo === '/js/e2fb23a_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e2fb23a',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_e2fb23a_8',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/17e3519')) {
                // _assetic_17e3519
                if ($pathinfo === '/js/17e3519.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_17e3519',);
                }

                if (0 === strpos($pathinfo, '/js/17e3519_')) {
                    // _assetic_17e3519_0
                    if ($pathinfo === '/js/17e3519_jquery.dataTables_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_17e3519_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/17e3519_data')) {
                        // _assetic_17e3519_1
                        if ($pathinfo === '/js/17e3519_dataTables.bootstrap_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_17e3519_1',);
                        }

                        // _assetic_17e3519_2
                        if ($pathinfo === '/js/17e3519_datatables_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_17e3519_2',);
                        }

                    }

                    // _assetic_17e3519_3
                    if ($pathinfo === '/js/17e3519_select2.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_17e3519_3',);
                    }

                    // _assetic_17e3519_4
                    if ($pathinfo === '/js/17e3519_discharge_article_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_17e3519_4',);
                    }

                    // _assetic_17e3519_5
                    if ($pathinfo === '/js/17e3519_edit_discharge_user_article_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_17e3519_5',);
                    }

                    // _assetic_17e3519_6
                    if ($pathinfo === '/js/17e3519_moment.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_17e3519_6',);
                    }

                    // _assetic_17e3519_7
                    if ($pathinfo === '/js/17e3519_bootstrap-datepicker_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_17e3519_7',);
                    }

                    // _assetic_17e3519_8
                    if ($pathinfo === '/js/17e3519_date_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17e3519',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_17e3519_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/91a2cbd')) {
            // _assetic_91a2cbd
            if ($pathinfo === '/css/91a2cbd.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_91a2cbd',);
            }

            if (0 === strpos($pathinfo, '/css/91a2cbd_')) {
                // _assetic_91a2cbd_0
                if ($pathinfo === '/css/91a2cbd_font-awesome.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_0',);
                }

                // _assetic_91a2cbd_1
                if ($pathinfo === '/css/91a2cbd_themify-icons_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_1',);
                }

                // _assetic_91a2cbd_2
                if ($pathinfo === '/css/91a2cbd_styles_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_2',);
                }

                // _assetic_91a2cbd_3
                if ($pathinfo === '/css/91a2cbd_animate_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_3',);
                }

                if (0 === strpos($pathinfo, '/css/91a2cbd_message')) {
                    // _assetic_91a2cbd_4
                    if ($pathinfo === '/css/91a2cbd_message-box_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_4',);
                    }

                    // _assetic_91a2cbd_5
                    if ($pathinfo === '/css/91a2cbd_message_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_5',);
                    }

                }

                // _assetic_91a2cbd_6
                if ($pathinfo === '/css/91a2cbd_pnotify_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_6',);
                }

                // _assetic_91a2cbd_7
                if ($pathinfo === '/css/91a2cbd_skylo_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '91a2cbd',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_91a2cbd_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/3f46471')) {
                // _assetic_3f46471
                if ($pathinfo === '/js/3f46471.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f46471',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3f46471',);
                }

                if (0 === strpos($pathinfo, '/js/3f46471_')) {
                    // _assetic_3f46471_0
                    if ($pathinfo === '/js/3f46471_jquery-1.10.2.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f46471',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3f46471_0',);
                    }

                    // _assetic_3f46471_1
                    if ($pathinfo === '/js/3f46471_skylo_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f46471',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3f46471_1',);
                    }

                    // _assetic_3f46471_2
                    if ($pathinfo === '/js/3f46471_jquery.nicescroll_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3f46471',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3f46471_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/41a1404')) {
                // _assetic_41a1404
                if ($pathinfo === '/js/41a1404.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_41a1404',);
                }

                if (0 === strpos($pathinfo, '/js/41a1404_')) {
                    // _assetic_41a1404_0
                    if ($pathinfo === '/js/41a1404_jqueryui-1.10.3.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_41a1404_0',);
                    }

                    // _assetic_41a1404_1
                    if ($pathinfo === '/js/41a1404_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_41a1404_1',);
                    }

                    // _assetic_41a1404_2
                    if ($pathinfo === '/js/41a1404_enquire.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_41a1404_2',);
                    }

                    // _assetic_41a1404_3
                    if ($pathinfo === '/js/41a1404_wijets_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_41a1404_3',);
                    }

                    // _assetic_41a1404_4
                    if ($pathinfo === '/js/41a1404_prettify_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_41a1404_4',);
                    }

                    // _assetic_41a1404_5
                    if ($pathinfo === '/js/41a1404_jquery.nanoscroller.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_41a1404_5',);
                    }

                    // _assetic_41a1404_6
                    if ($pathinfo === '/js/41a1404_message-box_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_41a1404_6',);
                    }

                    // _assetic_41a1404_7
                    if ($pathinfo === '/js/41a1404_application_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_41a1404_7',);
                    }

                    // _assetic_41a1404_8
                    if ($pathinfo === '/js/41a1404_router_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_41a1404_8',);
                    }

                    // _assetic_41a1404_9
                    if ($pathinfo === '/js/41a1404_pnotify.min_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_41a1404_9',);
                    }

                    // _assetic_41a1404_10
                    if ($pathinfo === '/js/41a1404_translator.min_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41a1404',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_41a1404_10',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            if (0 === strpos($pathinfo, '/articleconsumable')) {
                // articleconsumable_index
                if (rtrim($pathinfo, '/') === '/articleconsumable') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articleconsumable_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'articleconsumable_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleConsumableController::indexAction',  '_route' => 'articleconsumable_index',);
                }
                not_articleconsumable_index:

                // articleconsumable_new
                if ($pathinfo === '/articleconsumable/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articleconsumable_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleConsumableController::newAction',  '_route' => 'articleconsumable_new',);
                }
                not_articleconsumable_new:

                // articleconsumable_show
                if (preg_match('#^/articleconsumable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_articleconsumable_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articleconsumable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleConsumableController::showAction',));
                }
                not_articleconsumable_show:

                // articleconsumable_edit
                if (preg_match('#^/articleconsumable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articleconsumable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articleconsumable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleConsumableController::editAction',));
                }
                not_articleconsumable_edit:

                // articleconsumable_delete
                if (preg_match('#^/articleconsumable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_articleconsumable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articleconsumable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleConsumableController::deleteAction',));
                }
                not_articleconsumable_delete:

            }

            if (0 === strpos($pathinfo, '/articledurable')) {
                // articledurable_index
                if (rtrim($pathinfo, '/') === '/articledurable') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articledurable_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'articledurable_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleDurableController::indexAction',  '_route' => 'articledurable_index',);
                }
                not_articledurable_index:

                // articledurable_new
                if ($pathinfo === '/articledurable/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articledurable_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleDurableController::newAction',  '_route' => 'articledurable_new',);
                }
                not_articledurable_new:

                // articledurable_show
                if (preg_match('#^/articledurable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_articledurable_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articledurable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleDurableController::showAction',));
                }
                not_articledurable_show:

                // articledurable_edit
                if (preg_match('#^/articledurable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_articledurable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articledurable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleDurableController::editAction',));
                }
                not_articledurable_edit:

                // articledurable_delete
                if (preg_match('#^/articledurable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_articledurable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articledurable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\ArticleDurableController::deleteAction',));
                }
                not_articledurable_delete:

            }

        }

        if (0 === strpos($pathinfo, '/unit')) {
            // unit_index
            if (rtrim($pathinfo, '/') === '/unit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_unit_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'unit_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\UnitController::indexAction',  '_route' => 'unit_index',);
            }
            not_unit_index:

            // unit_new
            if ($pathinfo === '/unit/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_unit_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\UnitController::newAction',  '_route' => 'unit_new',);
            }
            not_unit_new:

            // unit_edit
            if (preg_match('#^/unit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_unit_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\UnitController::editAction',));
            }
            not_unit_edit:

            // unit_delete
            if (preg_match('#^/unit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_unit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Article\\UnitController::deleteAction',));
            }
            not_unit_delete:

        }

        if (0 === strpos($pathinfo, '/dischargearticle_')) {
            if (0 === strpos($pathinfo, '/dischargearticle_local')) {
                // discharge_article_to_local_index
                if (rtrim($pathinfo, '/') === '/dischargearticle_local') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_local_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'discharge_article_to_local_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::indexAction',  '_route' => 'discharge_article_to_local_index',);
                }
                not_discharge_article_to_local_index:

                // discharge_article_to_local_check
                if (0 === strpos($pathinfo, '/dischargearticle_local/check') && preg_match('#^/dischargearticle_local/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_local_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_local_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::checkAction',));
                }
                not_discharge_article_to_local_check:

                // discharge_article_to_local_new
                if ($pathinfo === '/dischargearticle_local/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_local_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::newAction',  '_route' => 'discharge_article_to_local_new',);
                }
                not_discharge_article_to_local_new:

                // discharge_article_to_local_show
                if (0 === strpos($pathinfo, '/dischargearticle_local/show') && preg_match('#^/dischargearticle_local/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_discharge_article_to_local_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_local_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::showAction',));
                }
                not_discharge_article_to_local_show:

                // discharge_article_to_local_edit
                if (0 === strpos($pathinfo, '/dischargearticle_local/edit') && preg_match('#^/dischargearticle_local/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_local_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_local_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::editAction',));
                }
                not_discharge_article_to_local_edit:

                // discharge_article_to_local_delete
                if (0 === strpos($pathinfo, '/dischargearticle_local/delete') && preg_match('#^/dischargearticle_local/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_discharge_article_to_local_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_local_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToLocalController::deleteAction',));
                }
                not_discharge_article_to_local_delete:

            }

            if (0 === strpos($pathinfo, '/dischargearticle_SubStore')) {
                // discharge_article_to_magazine_index
                if (rtrim($pathinfo, '/') === '/dischargearticle_SubStore') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_magazine_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'discharge_article_to_magazine_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::indexAction',  '_route' => 'discharge_article_to_magazine_index',);
                }
                not_discharge_article_to_magazine_index:

                // discharge_article_to_magazine_check
                if (0 === strpos($pathinfo, '/dischargearticle_SubStore/check') && preg_match('#^/dischargearticle_SubStore/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_magazine_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_magazine_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::checkAction',));
                }
                not_discharge_article_to_magazine_check:

                // discharge_article_to_magazine_new
                if ($pathinfo === '/dischargearticle_SubStore/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_magazine_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::newAction',  '_route' => 'discharge_article_to_magazine_new',);
                }
                not_discharge_article_to_magazine_new:

                // discharge_article_to_magazine_show
                if (0 === strpos($pathinfo, '/dischargearticle_SubStore/show') && preg_match('#^/dischargearticle_SubStore/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_discharge_article_to_magazine_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_magazine_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::showAction',));
                }
                not_discharge_article_to_magazine_show:

                // discharge_article_to_magazine_edit
                if (0 === strpos($pathinfo, '/dischargearticle_SubStore/edit') && preg_match('#^/dischargearticle_SubStore/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_magazine_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_magazine_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::editAction',));
                }
                not_discharge_article_to_magazine_edit:

                // discharge_article_to_magazine_delete
                if (0 === strpos($pathinfo, '/dischargearticle_SubStore/delete') && preg_match('#^/dischargearticle_SubStore/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_discharge_article_to_magazine_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_magazine_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToSubStoreController::deleteAction',));
                }
                not_discharge_article_to_magazine_delete:

            }

            if (0 === strpos($pathinfo, '/dischargearticle_user')) {
                // discharge_article_to_user_index
                if (rtrim($pathinfo, '/') === '/dischargearticle_user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'discharge_article_to_user_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::indexAction',  '_route' => 'discharge_article_to_user_index',);
                }
                not_discharge_article_to_user_index:

                // discharge_article_to_user_check
                if (0 === strpos($pathinfo, '/dischargearticle_user/check') && preg_match('#^/dischargearticle_user/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_user_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_user_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::checkAction',));
                }
                not_discharge_article_to_user_check:

                // discharge_article_to_user_new
                if ($pathinfo === '/dischargearticle_user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_user_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::newAction',  '_route' => 'discharge_article_to_user_new',);
                }
                not_discharge_article_to_user_new:

                // discharge_article_to_user_show
                if (preg_match('#^/dischargearticle_user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_discharge_article_to_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_user_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::showAction',));
                }
                not_discharge_article_to_user_show:

                // discharge_article_to_user_edit
                if (0 === strpos($pathinfo, '/dischargearticle_user/edit') && preg_match('#^/dischargearticle_user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_discharge_article_to_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_user_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::editAction',));
                }
                not_discharge_article_to_user_edit:

                // discharge_article_to_user_delete
                if (0 === strpos($pathinfo, '/dischargearticle_user/delete') && preg_match('#^/dischargearticle_user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_discharge_article_to_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'discharge_article_to_user_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\DischargeArticleToUserController::deleteAction',));
                }
                not_discharge_article_to_user_delete:

            }

        }

        if (0 === strpos($pathinfo, '/orderarticle')) {
            // orderarticle_index
            if (rtrim($pathinfo, '/') === '/orderarticle') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orderarticle_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orderarticle_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\OrderArticleController::indexAction',  '_route' => 'orderarticle_index',);
            }
            not_orderarticle_index:

            // orderarticle_new
            if ($pathinfo === '/orderarticle/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orderarticle_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\OrderArticleController::newAction',  '_route' => 'orderarticle_new',);
            }
            not_orderarticle_new:

            // orderarticle_show
            if (0 === strpos($pathinfo, '/orderarticle/show') && preg_match('#^/orderarticle/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orderarticle_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderarticle_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\OrderArticleController::showAction',));
            }
            not_orderarticle_show:

            // orderarticle_edit
            if (0 === strpos($pathinfo, '/orderarticle/edit') && preg_match('#^/orderarticle/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orderarticle_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderarticle_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\OrderArticleController::editAction',));
            }
            not_orderarticle_edit:

            // orderarticle_delete
            if (0 === strpos($pathinfo, '/orderarticle/delete') && preg_match('#^/orderarticle/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orderarticle_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orderarticle_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\OrderArticleController::deleteAction',));
            }
            not_orderarticle_delete:

        }

        if (0 === strpos($pathinfo, '/returnarticle_')) {
            if (0 === strpos($pathinfo, '/returnarticle_centralStore')) {
                // returnArticle_centralStore_index
                if (rtrim($pathinfo, '/') === '/returnarticle_centralStore') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_centralStore_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'returnArticle_centralStore_index');
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::indexAction',  '_route' => 'returnArticle_centralStore_index',);
                }
                not_returnArticle_centralStore_index:

                // returnArticle_centralStore_new
                if ($pathinfo === '/returnarticle_centralStore/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_centralStore_new;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::newAction',  '_route' => 'returnArticle_centralStore_new',);
                }
                not_returnArticle_centralStore_new:

                // returnArticle_centralStore_check
                if (0 === strpos($pathinfo, '/returnarticle_centralStore/check') && preg_match('#^/returnarticle_centralStore/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_centralStore_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_centralStore_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::checkAction',));
                }
                not_returnArticle_centralStore_check:

                // returnArticle_centralStore_show
                if (0 === strpos($pathinfo, '/returnarticle_centralStore/show') && preg_match('#^/returnarticle_centralStore/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_returnArticle_centralStore_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_centralStore_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::showAction',));
                }
                not_returnArticle_centralStore_show:

                // returnArticle_centralStore_edit
                if (0 === strpos($pathinfo, '/returnarticle_centralStore/edit') && preg_match('#^/returnarticle_centralStore/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_centralStore_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_centralStore_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::editAction',));
                }
                not_returnArticle_centralStore_edit:

                // returnArticle_centralStore_delete
                if (0 === strpos($pathinfo, '/returnarticle_centralStore/delete') && preg_match('#^/returnarticle_centralStore/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_returnArticle_centralStore_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_centralStore_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToCentralStoreController::deleteAction',));
                }
                not_returnArticle_centralStore_delete:

            }

            if (0 === strpos($pathinfo, '/returnarticle_subStore')) {
                // returnarticle_subStore_index
                if (preg_match('#^/returnarticle_subStore/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnarticle_subStore_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnarticle_subStore_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::indexAction',));
                }
                not_returnarticle_subStore_index:

                // returnArticle_subStore_new
                if (0 === strpos($pathinfo, '/returnarticle_subStore/new') && preg_match('#^/returnarticle_subStore/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_subStore_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_subStore_new')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::newAction',));
                }
                not_returnArticle_subStore_new:

                // returnArticle_subStore_check
                if (0 === strpos($pathinfo, '/returnarticle_subStore/check') && preg_match('#^/returnarticle_subStore/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_subStore_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_subStore_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::checkAction',));
                }
                not_returnArticle_subStore_check:

                // returnArticle_subStore_show
                if (0 === strpos($pathinfo, '/returnarticle_subStore/show') && preg_match('#^/returnarticle_subStore/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_returnArticle_subStore_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_subStore_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::showAction',));
                }
                not_returnArticle_subStore_show:

                // returnArticle_subStore_edit
                if (0 === strpos($pathinfo, '/returnarticle_subStore/edit') && preg_match('#^/returnarticle_subStore/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_returnArticle_subStore_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnArticle_subStore_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::editAction',));
                }
                not_returnArticle_subStore_edit:

                // returnarticle_subStore_delete
                if (0 === strpos($pathinfo, '/returnarticle_subStore/delete') && preg_match('#^/returnarticle_subStore/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_returnarticle_subStore_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'returnarticle_subStore_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\ArticleManagement\\ReturnArticleToSubStoreController::deleteAction',));
                }
                not_returnarticle_subStore_delete:

            }

        }

        if (0 === strpos($pathinfo, '/detail')) {
            if (0 === strpos($pathinfo, '/detailDischargeToUser')) {
                if (0 === strpos($pathinfo, '/detailDischargeToUser/index')) {
                    // detailDischarge_session_index
                    if ($pathinfo === '/detailDischargeToUser/index') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailDischarge_session_index;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::indexInSessionAction',  '_route' => 'detailDischarge_session_index',);
                    }
                    not_detailDischarge_session_index:

                    // detailDischarge_dataBase_index
                    if (preg_match('#^/detailDischargeToUser/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailDischarge_dataBase_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischarge_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::indexInDataBaseAction',));
                    }
                    not_detailDischarge_dataBase_index:

                }

                // detailDischarge_new
                if (0 === strpos($pathinfo, '/detailDischargeToUser/new') && preg_match('#^/detailDischargeToUser/new(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detailDischarge_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischarge_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::newAction',));
                }
                not_detailDischarge_new:

                // detailDischarge_edit
                if (preg_match('#^/detailDischargeToUser/(?P<id>[^/]++)/edit(?:/(?P<idDetail>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detailDischarge_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischarge_edit')), array (  'idDetail' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::editDetailAction',));
                }
                not_detailDischarge_edit:

                if (0 === strpos($pathinfo, '/detailDischargeToUser/de')) {
                    // detailDischarge_session_delete
                    if (0 === strpos($pathinfo, '/detailDischargeToUser/deleteFormSession') && preg_match('#^/detailDischargeToUser/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailDischarge_session_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischarge_session_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::deleteDetailFromSessionAction',));
                    }
                    not_detailDischarge_session_delete:

                    // detailDischarge_delete
                    if (0 === strpos($pathinfo, '/detailDischargeToUser/detail') && preg_match('#^/detailDischargeToUser/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailDischarge_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischarge_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailDischargeArticleController::deleteDetailAction',));
                    }
                    not_detailDischarge_delete:

                }

            }

            if (0 === strpos($pathinfo, '/detailOrder')) {
                if (0 === strpos($pathinfo, '/detailOrder/index')) {
                    // detailOrderArticle_index
                    if ($pathinfo === '/detailOrder/index') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailOrderArticle_index;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::indexSaveInSessionAction',  '_route' => 'detailOrderArticle_index',);
                    }
                    not_detailOrderArticle_index:

                    // detailOrderArticle_dataBase_index
                    if (preg_match('#^/detailOrder/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailOrderArticle_dataBase_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailOrderArticle_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::indexSaveInDataBaseAction',));
                    }
                    not_detailOrderArticle_dataBase_index:

                }

                // detailOrderArticle_new
                if (0 === strpos($pathinfo, '/detailOrder/new') && preg_match('#^/detailOrder/new(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detailOrderArticle_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailOrderArticle_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::newAction',));
                }
                not_detailOrderArticle_new:

                // detailOrderArticle_edit
                if (preg_match('#^/detailOrder/(?P<id>[^/]++)/edit(?:/(?P<idDetail>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_detailOrderArticle_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailOrderArticle_edit')), array (  'idDetail' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::editDetailAction',));
                }
                not_detailOrderArticle_edit:

                if (0 === strpos($pathinfo, '/detailOrder/de')) {
                    // detailOrderFormSession_delete
                    if (0 === strpos($pathinfo, '/detailOrder/deleteFormSession') && preg_match('#^/detailOrder/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailOrderFormSession_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailOrderFormSession_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::deleteDetailFromSessionAction',));
                    }
                    not_detailOrderFormSession_delete:

                    // detailOrderArticle_delete
                    if (0 === strpos($pathinfo, '/detailOrder/detail') && preg_match('#^/detailOrder/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailOrderArticle_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailOrderArticle_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailOrderArticleController::deleteDetailAction',));
                    }
                    not_detailOrderArticle_delete:

                }

            }

            if (0 === strpos($pathinfo, '/detailReturn')) {
                if (0 === strpos($pathinfo, '/detailReturn/index')) {
                    // detailReturn_saveIn_session_index
                    if ($pathinfo === '/detailReturn/index') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailReturn_saveIn_session_index;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::indexSaveInSessionAction',  '_route' => 'detailReturn_saveIn_session_index',);
                    }
                    not_detailReturn_saveIn_session_index:

                    // detailReturn_saveIn_dataBase_index
                    if (preg_match('#^/detailReturn/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailReturn_saveIn_dataBase_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReturn_saveIn_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::indexSaveInDataBaseAction',));
                    }
                    not_detailReturn_saveIn_dataBase_index:

                }

                // detailReturn_new
                if (0 === strpos($pathinfo, '/detailReturn/new') && preg_match('#^/detailReturn/new(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_detailReturn_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReturn_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::newAction',));
                }
                not_detailReturn_new:

                // detailReturn_edit
                if (preg_match('#^/detailReturn/(?P<id>[^/]++)/edit(?:/(?P<idDetail>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_detailReturn_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReturn_edit')), array (  'idDetail' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::editDetailAction',));
                }
                not_detailReturn_edit:

                if (0 === strpos($pathinfo, '/detailReturn/de')) {
                    // detailReturnFormSession_delete
                    if (0 === strpos($pathinfo, '/detailReturn/deleteFormSession') && preg_match('#^/detailReturn/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailReturnFormSession_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReturnFormSession_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::deleteDetailFromSessionAction',));
                    }
                    not_detailReturnFormSession_delete:

                    // detailReturn_delete
                    if (0 === strpos($pathinfo, '/detailReturn/detail') && preg_match('#^/detailReturn/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailReturn_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReturn_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailReturnArticleController::deleteDetailAction',));
                    }
                    not_detailReturn_delete:

                }

            }

            if (0 === strpos($pathinfo, '/detailSubMagazine')) {
                if (0 === strpos($pathinfo, '/detailSubMagazine/index')) {
                    // detailDischargeSubMagazine_session_index
                    if ($pathinfo === '/detailSubMagazine/index') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailDischargeSubMagazine_session_index;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::indexInSessionAction',  '_route' => 'detailDischargeSubMagazine_session_index',);
                    }
                    not_detailDischargeSubMagazine_session_index:

                    // detailDischargeSubMagazine_dataBase_index
                    if (preg_match('#^/detailSubMagazine/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_detailDischargeSubMagazine_dataBase_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischargeSubMagazine_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::indexInDataBaseAction',));
                    }
                    not_detailDischargeSubMagazine_dataBase_index:

                }

                // detailDischargeSubMagazine_new
                if (0 === strpos($pathinfo, '/detailSubMagazine/new') && preg_match('#^/detailSubMagazine/new(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_detailDischargeSubMagazine_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischargeSubMagazine_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::newAction',));
                }
                not_detailDischargeSubMagazine_new:

                // detailDischargeSubMagazine_edit
                if (preg_match('#^/detailSubMagazine/(?P<id>[^/]++)/edit(?:/(?P<idDetail>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_detailDischargeSubMagazine_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischargeSubMagazine_edit')), array (  'idDetail' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::editDetailAction',));
                }
                not_detailDischargeSubMagazine_edit:

                if (0 === strpos($pathinfo, '/detailSubMagazine/de')) {
                    // detailDischargeSubMagazine_session_delete
                    if (0 === strpos($pathinfo, '/detailSubMagazine/deleteFormSession') && preg_match('#^/detailSubMagazine/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailDischargeSubMagazine_session_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischargeSubMagazine_session_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::deleteDetailFromSessionAction',));
                    }
                    not_detailDischargeSubMagazine_session_delete:

                    // detailDischargeSubMagazine_delete
                    if (0 === strpos($pathinfo, '/detailSubMagazine/detail') && preg_match('#^/detailSubMagazine/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_detailDischargeSubMagazine_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailDischargeSubMagazine_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\DetailArticleManagement\\DetailSubMagazineController::deleteDetailAction',));
                    }
                    not_detailDischargeSubMagazine_delete:

                }

            }

        }

        // Inventory_index
        if ($pathinfo === '/inventory') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_Inventory_index;
            }

            return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Etat\\EtatController::inventoryAction',  '_route' => 'Inventory_index',);
        }
        not_Inventory_index:

        // stock_index
        if ($pathinfo === '/stock') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_stock_index;
            }

            return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Etat\\EtatController::stockAction',  '_route' => 'stock_index',);
        }
        not_stock_index:

        if (0 === strpos($pathinfo, '/consumableFamily')) {
            // familyconsumable_index
            if ($pathinfo === '/consumableFamily/index') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familyconsumable_index;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyConsumableController::indexAction',  '_route' => 'familyconsumable_index',);
            }
            not_familyconsumable_index:

            // familyconsumable_new
            if ($pathinfo === '/consumableFamily/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familyconsumable_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyConsumableController::newAction',  '_route' => 'familyconsumable_new',);
            }
            not_familyconsumable_new:

            // familyconsumable_show
            if (preg_match('#^/consumableFamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_familyconsumable_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familyconsumable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyConsumableController::showAction',));
            }
            not_familyconsumable_show:

            // familyconsumable_edit
            if (preg_match('#^/consumableFamily/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familyconsumable_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familyconsumable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyConsumableController::editAction',));
            }
            not_familyconsumable_edit:

            // familyconsumable_delete
            if (preg_match('#^/consumableFamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_familyconsumable_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familyconsumable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyConsumableController::deleteAction',));
            }
            not_familyconsumable_delete:

        }

        if (0 === strpos($pathinfo, '/durableFamily')) {
            // familydurable_index
            if ($pathinfo === '/durableFamily/index') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familydurable_index;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyDurableController::indexAction',  '_route' => 'familydurable_index',);
            }
            not_familydurable_index:

            // familydurable_new
            if ($pathinfo === '/durableFamily/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familydurable_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyDurableController::newAction',  '_route' => 'familydurable_new',);
            }
            not_familydurable_new:

            // familydurable_show
            if (preg_match('#^/durableFamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familydurable_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familydurable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyDurableController::showAction',));
            }
            not_familydurable_show:

            // familydurable_edit
            if (preg_match('#^/durableFamily/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_familydurable_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familydurable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyDurableController::editAction',));
            }
            not_familydurable_edit:

            // familydurable_delete
            if (preg_match('#^/durableFamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_familydurable_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'familydurable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\FamilyDurableController::deleteAction',));
            }
            not_familydurable_delete:

        }

        if (0 === strpos($pathinfo, '/subfamily')) {
            // subfamily_index
            if (0 === strpos($pathinfo, '/subfamily/index') && preg_match('#^/subfamily/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_subfamily_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subfamily_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\SubFamilyController::indexAction',));
            }
            not_subfamily_index:

            // subfamily_new
            if (0 === strpos($pathinfo, '/subfamily/new') && preg_match('#^/subfamily/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_subfamily_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subfamily_new')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\SubFamilyController::newAction',));
            }
            not_subfamily_new:

            // subfamily_edit
            if (preg_match('#^/subfamily/(?P<id>[^/]++)/edit(?P<idFamily>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_subfamily_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subfamily_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\SubFamilyController::editAction',));
            }
            not_subfamily_edit:

            // subfamily_delete
            if (preg_match('#^/subfamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_subfamily_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subfamily_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Family\\SubFamilyController::deleteAction',));
            }
            not_subfamily_delete:

        }

        // dashboard_index
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Home\\DashboardController::indexAction',  '_route' => 'dashboard_index',);
        }

        if (0 === strpos($pathinfo, '/j')) {
            if (0 === strpos($pathinfo, '/json')) {
                // Sub_family_index
                if (0 === strpos($pathinfo, '/json/family') && preg_match('#^/json/family/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_Sub_family_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Sub_family_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getSubFamilyAction',));
                }
                not_Sub_family_index:

                // json_local_index
                if (0 === strpos($pathinfo, '/json/local') && preg_match('#^/json/local/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_json_local_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_local_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getTypeLocalAction',));
                }
                not_json_local_index:

                // json_subFamily_index
                if (0 === strpos($pathinfo, '/json/subFamily') && preg_match('#^/json/subFamily/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_json_subFamily_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_subFamily_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getArticleAction',));
                }
                not_json_subFamily_index:

                // json_article_index
                if (0 === strpos($pathinfo, '/json/article') && preg_match('#^/json/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_json_article_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_article_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getArticleByIdAction',));
                }
                not_json_article_index:

                // json_supporting_document_index
                if (0 === strpos($pathinfo, '/json/supporting_document') && preg_match('#^/json/supporting_document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_json_supporting_document_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_supporting_document_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getSupportingDocumentAction',));
                }
                not_json_supporting_document_index:

                // json_supporting_document_subStore_index
                if (preg_match('#^/json/(?P<id>[^/]++)/supporting_subStore_document/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_json_supporting_document_subStore_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_supporting_document_subStore_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::getSubStoreSupportingDocumentAction',));
                }
                not_json_supporting_document_subStore_index:

                // json_InventoryNumber_generate
                if (0 === strpos($pathinfo, '/json/inventoryNumber') && preg_match('#^/json/inventoryNumber(?:/(?P<inventoryNumber>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_json_InventoryNumber_generate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'json_InventoryNumber_generate')), array (  'inventoryNumber' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::generateInventoryNumberAction',));
                }
                not_json_InventoryNumber_generate:

                // user_onligne_json_show
                if ($pathinfo === '/json/user_onligne') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_onligne_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::userOnligneAction',  '_route' => 'user_onligne_json_show',);
                }
                not_user_onligne_json_show:

                // stock_json_show
                if ($pathinfo === '/json/stock_json') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_stock_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::stockAction',  '_route' => 'stock_json_show',);
                }
                not_stock_json_show:

                // bl_json_show
                if ($pathinfo === '/json/bl_json') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bl_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::blAction',  '_route' => 'bl_json_show',);
                }
                not_bl_json_show:

                // facture_json_show
                if ($pathinfo === '/json/facture_json') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facture_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::factureAction',  '_route' => 'facture_json_show',);
                }
                not_facture_json_show:

                // journal_json_show
                if ($pathinfo === '/json/journal_json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_journal_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::journalAction',  '_route' => 'journal_json_show',);
                }
                not_journal_json_show:

                // journal_by_qte_json_show
                if ($pathinfo === '/json/qte_journal_json') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_journal_by_qte_json_show;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::journalByQuantityAction',  '_route' => 'journal_by_qte_json_show',);
                }
                not_journal_by_qte_json_show:

                // clear_session_json
                if ($pathinfo === '/json/session_clear') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clear_session_json;
                    }

                    return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\JSON\\JsonController::clearSessionAction',  '_route' => 'clear_session_json',);
                }
                not_clear_session_json:

            }

            if (0 === strpos($pathinfo, '/journal')) {
                if (0 === strpos($pathinfo, '/journalconsumable')) {
                    // journalconsumable_index
                    if (rtrim($pathinfo, '/') === '/journalconsumable') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journalconsumable_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'journalconsumable_index');
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalConsumableController::indexAction',  '_route' => 'journalconsumable_index',);
                    }
                    not_journalconsumable_index:

                    // journalconsumable_new
                    if ($pathinfo === '/journalconsumable/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journalconsumable_new;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalConsumableController::newAction',  '_route' => 'journalconsumable_new',);
                    }
                    not_journalconsumable_new:

                    // journalconsumable_show
                    if (preg_match('#^/journalconsumable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_journalconsumable_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journalconsumable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalConsumableController::showAction',));
                    }
                    not_journalconsumable_show:

                    // journalconsumable_edit
                    if (0 === strpos($pathinfo, '/journalconsumable/edit') && preg_match('#^/journalconsumable/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journalconsumable_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journalconsumable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalConsumableController::editAction',));
                    }
                    not_journalconsumable_edit:

                    // journalconsumable_delete
                    if (preg_match('#^/journalconsumable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_journalconsumable_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journalconsumable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalConsumableController::deleteAction',));
                    }
                    not_journalconsumable_delete:

                }

                if (0 === strpos($pathinfo, '/journaldurable')) {
                    // journaldurable_index
                    if (rtrim($pathinfo, '/') === '/journaldurable') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journaldurable_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'journaldurable_index');
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalDurableController::indexAction',  '_route' => 'journaldurable_index',);
                    }
                    not_journaldurable_index:

                    // journaldurable_new
                    if ($pathinfo === '/journaldurable/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journaldurable_new;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalDurableController::newAction',  '_route' => 'journaldurable_new',);
                    }
                    not_journaldurable_new:

                    // journaldurable_show
                    if (preg_match('#^/journaldurable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_journaldurable_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journaldurable_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalDurableController::showAction',));
                    }
                    not_journaldurable_show:

                    // journaldurable_edit
                    if (0 === strpos($pathinfo, '/journaldurable/edit') && preg_match('#^/journaldurable/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_journaldurable_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journaldurable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalDurableController::editAction',));
                    }
                    not_journaldurable_edit:

                    // journaldurable_delete
                    if (preg_match('#^/journaldurable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_journaldurable_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'journaldurable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\JournalDurableController::deleteAction',));
                    }
                    not_journaldurable_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/origin')) {
            // origin_index
            if (rtrim($pathinfo, '/') === '/origin') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_origin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'origin_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\OriginController::indexAction',  '_route' => 'origin_index',);
            }
            not_origin_index:

            // origin_new
            if ($pathinfo === '/origin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_origin_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\OriginController::newAction',  '_route' => 'origin_new',);
            }
            not_origin_new:

            // origin_edit
            if (preg_match('#^/origin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_origin_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'origin_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\OriginController::editAction',));
            }
            not_origin_edit:

            // origin_delete
            if (preg_match('#^/origin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_origin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'origin_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\OriginController::deleteAction',));
            }
            not_origin_delete:

        }

        if (0 === strpos($pathinfo, '/supportingDocument')) {
            if (0 === strpos($pathinfo, '/supportingDocumentConsumable')) {
                if (0 === strpos($pathinfo, '/supportingDocumentConsumable/consumable')) {
                    // supportingdocumentconsumable_session_index
                    if ($pathinfo === '/supportingDocumentConsumable/consumable') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_supportingdocumentconsumable_session_index;
                        }

                        return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::indexConsumableSaveInSessionAction',  '_route' => 'supportingdocumentconsumable_session_index',);
                    }
                    not_supportingdocumentconsumable_session_index:

                    // supportingdocumentconsumable_dataBase_index
                    if (preg_match('#^/supportingDocumentConsumable/consumable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_supportingdocumentconsumable_dataBase_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentconsumable_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::indexConsumableSaveInDataBaseAction',));
                    }
                    not_supportingdocumentconsumable_dataBase_index:

                }

                // supportingdocumentconsumable_new
                if (0 === strpos($pathinfo, '/supportingDocumentConsumable/newSupportingDocumentConsumable') && preg_match('#^/supportingDocumentConsumable/newSupportingDocumentConsumable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_supportingdocumentconsumable_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentconsumable_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::newSupportingDocumentConsumableAction',));
                }
                not_supportingdocumentconsumable_new:

                // supportingdocumentconsumable_edit
                if (preg_match('#^/supportingDocumentConsumable/(?P<id>[^/]++)/editSupportingDocumentConsumable(?:/(?P<idSupportingDocument>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_supportingdocumentconsumable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentconsumable_edit')), array (  'idSupportingDocument' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::editSupportingDocumentConsumableAction',));
                }
                not_supportingdocumentconsumable_edit:

                // supportingDocumentConsumableFormSession_delete
                if (0 === strpos($pathinfo, '/supportingDocumentConsumable/deleteFormSession') && preg_match('#^/supportingDocumentConsumable/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_supportingDocumentConsumableFormSession_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingDocumentConsumableFormSession_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::deleteSupportingDocumentFromSessionAction',));
                }
                not_supportingDocumentConsumableFormSession_delete:

                // supportingDocumentConsumable_delete
                if (preg_match('#^/supportingDocumentConsumable/(?P<id>[^/]++)/supportingdocument$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_supportingDocumentConsumable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingDocumentConsumable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentConsumableController::deleteSupportingDocumentAction',));
                }
                not_supportingDocumentConsumable_delete:

            }

            if (0 === strpos($pathinfo, '/supportingDocumentDurable')) {
                if (0 === strpos($pathinfo, '/supportingDocumentDurable/d')) {
                    if (0 === strpos($pathinfo, '/supportingDocumentDurable/durable')) {
                        // supportingdocumentdurable_session_index
                        if ($pathinfo === '/supportingDocumentDurable/durable') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_supportingdocumentdurable_session_index;
                            }

                            return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::indexDurableSaveInSessionAction',  '_route' => 'supportingdocumentdurable_session_index',);
                        }
                        not_supportingdocumentdurable_session_index:

                        // supportingdocumentdurable_dataBase_index
                        if (preg_match('#^/supportingDocumentDurable/durable/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_supportingdocumentdurable_dataBase_index;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentdurable_dataBase_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::indexDurableSaveInDataBaseAction',));
                        }
                        not_supportingdocumentdurable_dataBase_index:

                    }

                    // supportingDocumentDurableFormSession_delete
                    if (0 === strpos($pathinfo, '/supportingDocumentDurable/deleteFormSession') && preg_match('#^/supportingDocumentDurable/deleteFormSession/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_supportingDocumentDurableFormSession_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingDocumentDurableFormSession_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::deleteSupportingDocumentFromSessionAction',));
                    }
                    not_supportingDocumentDurableFormSession_delete:

                }

                // supportingDocumentDurable_delete
                if (0 === strpos($pathinfo, '/supportingDocumentDurable/supportingdocument') && preg_match('#^/supportingDocumentDurable/supportingdocument/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_supportingDocumentDurable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingDocumentDurable_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::deleteSupportingDocumentAction',));
                }
                not_supportingDocumentDurable_delete:

                // supportingdocumentdurable_new
                if (0 === strpos($pathinfo, '/supportingDocumentDurable/newSupportingDocumentDurable') && preg_match('#^/supportingDocumentDurable/newSupportingDocumentDurable(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_supportingdocumentdurable_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentdurable_new')), array (  'id' => 0,  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::newSupportingDocumentDurableAction',));
                }
                not_supportingdocumentdurable_new:

                // supportingdocumentdurable_edit
                if (preg_match('#^/supportingDocumentDurable/(?P<id>[^/]++)/editSupportingDocumentDurable$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_supportingdocumentdurable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supportingdocumentdurable_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Journal\\SupportingDocumentDurableController::editSupportingDocumentDurableAction',));
                }
                not_supportingdocumentdurable_edit:

            }

        }

        if (0 === strpos($pathinfo, '/local')) {
            // local_index
            if (rtrim($pathinfo, '/') === '/local') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_local_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'local_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\LocalController::indexAction',  '_route' => 'local_index',);
            }
            not_local_index:

            // local_new
            if ($pathinfo === '/local/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_local_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\LocalController::newAction',  '_route' => 'local_new',);
            }
            not_local_new:

            // local_edit
            if (preg_match('#^/local/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_local_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\LocalController::editAction',));
            }
            not_local_edit:

            // local_delete
            if (preg_match('#^/local/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_local_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\LocalController::deleteAction',));
            }
            not_local_delete:

        }

        if (0 === strpos($pathinfo, '/typelocal')) {
            // typelocal_index
            if (rtrim($pathinfo, '/') === '/typelocal') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typelocal_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typelocal_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\TypeLocalController::indexAction',  '_route' => 'typelocal_index',);
            }
            not_typelocal_index:

            // typelocal_new
            if ($pathinfo === '/typelocal/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typelocal_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\TypeLocalController::newAction',  '_route' => 'typelocal_new',);
            }
            not_typelocal_new:

            // typelocal_show
            if (preg_match('#^/typelocal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typelocal_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typelocal_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\TypeLocalController::showAction',));
            }
            not_typelocal_show:

            // typelocal_edit
            if (preg_match('#^/typelocal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_typelocal_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typelocal_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\TypeLocalController::editAction',));
            }
            not_typelocal_edit:

            // typelocal_delete
            if (preg_match('#^/typelocal/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_typelocal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typelocal_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Local\\TypeLocalController::deleteAction',));
            }
            not_typelocal_delete:

        }

        if (0 === strpos($pathinfo, '/magazine')) {
            // magazine_index
            if (rtrim($pathinfo, '/') === '/magazine') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_magazine_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'magazine_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreController::indexAction',  '_route' => 'magazine_index',);
            }
            not_magazine_index:

            // magazine_new
            if ($pathinfo === '/magazine/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_magazine_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreController::newAction',  '_route' => 'magazine_new',);
            }
            not_magazine_new:

            // magazine_show
            if (preg_match('#^/magazine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_magazine_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreController::showAction',));
            }
            not_magazine_show:

            // magazine_edit
            if (preg_match('#^/magazine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_magazine_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreController::editAction',));
            }
            not_magazine_edit:

            // magazine_delete
            if (preg_match('#^/magazine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_magazine_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreController::deleteAction',));
            }
            not_magazine_delete:

            if (0 === strpos($pathinfo, '/magazine_magazinedischarge')) {
                // magazine_magazinedischarge_index
                if (0 === strpos($pathinfo, '/magazine_magazinedischarge/index') && preg_match('#^/magazine_magazinedischarge/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_magazinedischarge_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_index')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::indexAction',));
                }
                not_magazine_magazinedischarge_index:

                // magazine_magazinedischarge_check
                if (0 === strpos($pathinfo, '/magazine_magazinedischarge/check') && preg_match('#^/magazine_magazinedischarge/check/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_magazinedischarge_check;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_check')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::checkAction',));
                }
                not_magazine_magazinedischarge_check:

                // magazine_magazinedischarge_new
                if (0 === strpos($pathinfo, '/magazine_magazinedischarge/new') && preg_match('#^/magazine_magazinedischarge/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_magazinedischarge_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_new')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::newAction',));
                }
                not_magazine_magazinedischarge_new:

                // magazine_magazinedischarge_show
                if (preg_match('#^/magazine_magazinedischarge/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_magazine_magazinedischarge_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::showAction',));
                }
                not_magazine_magazinedischarge_show:

                // magazine_magazinedischarge_edit
                if (0 === strpos($pathinfo, '/magazine_magazinedischarge/edit') && preg_match('#^/magazine_magazinedischarge/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_magazinedischarge_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::editAction',));
                }
                not_magazine_magazinedischarge_edit:

                // magazine_magazinedischarge_delete
                if (preg_match('#^/magazine_magazinedischarge/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_magazine_magazinedischarge_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_magazinedischarge_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Magazine\\StoreDischargeController::deleteAction',));
                }
                not_magazine_magazinedischarge_delete:

            }

        }

        if (0 === strpos($pathinfo, '/pdf/pdf')) {
            // journalconsumable_pdf
            if (preg_match('#^/pdf/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_journalconsumable_pdf;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'journalconsumable_pdf')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\PDF\\PDFController::pdfJournalConsumableAction',));
            }
            not_journalconsumable_pdf:

            // journaldurable_pdf
            if (preg_match('#^/pdf/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_journaldurable_pdf;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'journaldurable_pdf')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\PDF\\PDFController::pdfJournalDurableAction',));
            }
            not_journaldurable_pdf:

        }

        if (0 === strpos($pathinfo, '/activitydomain')) {
            // activitydomain_index
            if (rtrim($pathinfo, '/') === '/activitydomain') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activitydomain_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activitydomain_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ActivityDomainController::indexAction',  '_route' => 'activitydomain_index',);
            }
            not_activitydomain_index:

            // activitydomain_new
            if ($pathinfo === '/activitydomain/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activitydomain_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ActivityDomainController::newAction',  '_route' => 'activitydomain_new',);
            }
            not_activitydomain_new:

            // activitydomain_show
            if (preg_match('#^/activitydomain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activitydomain_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activitydomain_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ActivityDomainController::showAction',));
            }
            not_activitydomain_show:

            // activitydomain_edit
            if (preg_match('#^/activitydomain/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activitydomain_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activitydomain_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ActivityDomainController::editAction',));
            }
            not_activitydomain_edit:

            // activitydomain_delete
            if (preg_match('#^/activitydomain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_activitydomain_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activitydomain_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ActivityDomainController::deleteAction',));
            }
            not_activitydomain_delete:

        }

        if (0 === strpos($pathinfo, '/provider')) {
            // provider_index
            if (rtrim($pathinfo, '/') === '/provider') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_provider_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'provider_index');
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ProviderController::indexAction',  '_route' => 'provider_index',);
            }
            not_provider_index:

            // provider_new
            if ($pathinfo === '/provider/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_provider_new;
                }

                return array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ProviderController::newAction',  '_route' => 'provider_new',);
            }
            not_provider_new:

            // provider_show
            if (preg_match('#^/provider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_provider_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_show')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ProviderController::showAction',));
            }
            not_provider_show:

            // provider_edit
            if (preg_match('#^/provider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_provider_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_edit')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ProviderController::editAction',));
            }
            not_provider_edit:

            // provider_delete
            if (preg_match('#^/provider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_provider_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'provider_delete')), array (  '_controller' => 'ISETSO\\MagazineBundle\\Controller\\Provider\\ProviderController::deleteAction',));
            }
            not_provider_delete:

        }

        // history
        if ($pathinfo === '/history') {
            return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\HistoryController::indexAction',  '_route' => 'history',);
        }

        // notification
        if ($pathinfo === '/notification') {
            return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\NotificationController::showAction',  '_route' => 'notification',);
        }

        if (0 === strpos($pathinfo, '/permission')) {
            // user_permission
            if (0 === strpos($pathinfo, '/permissionuser') && preg_match('#^/permissionuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_permission;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_permission')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\PermissionController::userPermissionAction',));
            }
            not_user_permission:

            // userGroup_permission
            if (0 === strpos($pathinfo, '/permissiongroup') && preg_match('#^/permissiongroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_userGroup_permission;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'userGroup_permission')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\PermissionController::groupPermissionAction',));
            }
            not_userGroup_permission:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_new
            if ($pathinfo === '/usernew') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::lockedAction',));
            }
            not_user_delete:

            // user_expired
            if (0 === strpos($pathinfo, '/user/expired') && preg_match('#^/user/expired/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_expired;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_expired')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserController::expiredAction',));
            }
            not_user_expired:

            if (0 === strpos($pathinfo, '/usergroup')) {
                // usergroup_index
                if (rtrim($pathinfo, '/') === '/usergroup') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usergroup_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usergroup_index');
                    }

                    return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserGroupController::indexAction',  '_route' => 'usergroup_index',);
                }
                not_usergroup_index:

                // usergroup_new
                if ($pathinfo === '/usergroup/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usergroup_new;
                    }

                    return array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserGroupController::newAction',  '_route' => 'usergroup_new',);
                }
                not_usergroup_new:

                // usergroup_show
                if (preg_match('#^/usergroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_usergroup_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usergroup_show')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserGroupController::showAction',));
                }
                not_usergroup_show:

                // usergroup_edit
                if (preg_match('#^/usergroup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_usergroup_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usergroup_edit')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserGroupController::editAction',));
                }
                not_usergroup_edit:

                // usergroup_delete
                if (preg_match('#^/usergroup/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_usergroup_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usergroup_delete')), array (  '_controller' => 'ISETSO\\UserBundle\\Controller\\UserGroupController::deleteAction',));
                }
                not_usergroup_delete:

            }

        }

        // bazinga_jstranslation_js
        if (0 === strpos($pathinfo, '/translations') && preg_match('#^/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_bazinga_jstranslation_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
        }
        not_bazinga_jstranslation_js:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change_password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/message')) {
            // fos_message_inbox
            if (rtrim($pathinfo, '/') === '/message') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ($pathinfo === '/message/sent') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_deleted
            if ($pathinfo === '/message/deleted') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_search
            if ($pathinfo === '/message/search') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_thread_new
            if ($pathinfo === '/message/new') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/message/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/message/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
