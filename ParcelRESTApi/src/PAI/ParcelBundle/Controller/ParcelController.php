<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 06.04.2016
 * Time: 21:31
 */

namespace PAI\ParcelBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ParcelController extends FOSRestController
{
    public function getParcelAction($id)
    {
        return $this->getDoctrine()->getRepository('PAIParcelBundle:Parcel')->find($id);
    }

    public function getParcelsAction()
    {
        return $this->getDoctrine()->getRepository('PAIParcelBundle:Parcel')
            ->findAll();
    }

    public function postParcelAction(Request $request)
    {
        try {
            $newParcel = $this->container->get('pai_rest.parcel_form.handler')
                ->post(
                    $request->request->all()
                );
            $routeOptions = array(
                'id' => $newParcel->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView('api_1_get_parcel', $routeOptions,
                Response::HTTP_CREATED);
        } catch (InvalidFormException $exception) {
            return array('form' => $exception->getForm());
        }
    }

    public function putParcelAction(Request $request, $id)
    {
        try {
            $parcel = $this->getDoctrine()->getRepository('PAIParcelBundle:Parcel')
                ->find($id);
            if (!$parcel) {
                $statusCode = Response::HTTP_CREATED;
                $parcel = $this->container->get('pai_rest.parcel_form.handler')
                    ->post(
                        $request->request->all()
                    );
            } else {
                $statusCode = Response::HTTP_NO_CONTENT;
                $parcel = $this->container
                    ->get('pai_rest.parcel_form.handler')
                    ->put(
                        $parcel,
                        $request->request->all()
                    );
            }
            $routeOptions = array(
                'id' => $parcel->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView(
                'api_1_get_parcel',
                $routeOptions,
                $statusCode
            );
        } catch (InvalidFormException $exception) {
            return $exception->getForm();
        }
    }

    public function deleteParcelAction(Request $request, $id)
    {
        $parcel = $this->getDoctrine()
            ->getRepository('PAIParcelBundle:Parcel')->find($id);
        if ($parcel) {
            $this->getDoctrine()
                ->getRepository('PAIParcelBundle:Parcel')->delete($parcel);
        } else {
            throw new NotFoundHttpException(
                sprintf('The resource \'%s\' was not found.', $id)
            );
        }
    }
}