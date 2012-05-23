<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Progammerguy
 * Date: 5/23/12
 * Time: 2:01 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\HelloBundle\Entity\Posts;

class CareerController extends Controller
{
    /**
     * These are all the fields that I have so far required for the job postings
     *
     * @var array
     *  array of required fields
     *
     */

    protected $required = array(
        'job_title' =>
    )
}