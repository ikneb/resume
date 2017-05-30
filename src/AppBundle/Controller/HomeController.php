<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{

    public function indexAction(Request $request)
    {
//        var_dump($this->generateUrl('homepage', array()));exit;

        $request->request->get('page'); // get a $_POST parameter
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig', array('test' => '123'));
    }
}

/*not found*/
/*$product = ...;
    if (!$product) {
        throw $this->createNotFoundException('The product does not exist');
    }*/

/*session*/
/*$session = $request->getSession();
$session->set('foo', 'bar');
$foobar = $session->get('foobar');
$filters = $session->get('filters', array());
$this->addFlash(
            'notice',
            'Your changes were saved!'
        );
*/


/*form
$form = $this->createForm(...);

    $form->handleRequest($request);

    if ($form->isValid()) {
        // do some sort of processing

        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );

        // $this->addFlash is equivalent to $this->get('session')->getFlashBag()->add

        return $this->redirectToRoute(...);
    }
    //view mesage in twig
{% for flashMessage in app.session.flashbag.get('notice') %}
    <div class="flash-notice">
        {{ flashMessage }}
    </div>
{% endfor %}
*/


/*
 * work with response
 * // create a simple Response with a 200 status code (the default)
 *$response = new Response('Hello '.$name, Response::HTTP_OK);
 * create a JSON-response with a 200 status code
 *$response = new Response(json_encode(array('name' => $name)));
 *$response->headers->set('Content-Type', 'application/json');
 */

/*
 * redirect on the other controller
 * $response = $this->forward('AppBundle:Something:fancy', array(
 *       'name'  => $name,
 *      'color' => 'green',
 *   ));
 */

/*
 * example routing
 *
 *   * @Route("/blog/{page}", defaults={"page": 1}, requirements={
 *   *   "page": "\d+"
 *   * })
 *
 *   * @Route("/{_locale}", defaults={"_locale": "en"}, requirements={
 *   *     "_locale": "en|fr"
 *   * })
 *   * @Method("GET")
 *
 *
     * @Route(
     *     "/articles/{_locale}/{year}/{title}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     *
 */