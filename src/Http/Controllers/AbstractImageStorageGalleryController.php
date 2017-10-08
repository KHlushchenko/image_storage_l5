<?php namespace Vis\ImageStorage;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

abstract class AbstractImageStorageGalleryController extends AbstractImageStorageController
{
    public function doChangeGalleryOrder()
    {
        $idGallery = Input::get('idGallery');
        $idArray   = Input::get('idArray', array());

        $entity = $this->model->find($idGallery);

        $entity->changeGalleryOrder($idArray);

        return Response::json(array(
            'status' => true
        ));
    }

    public function doDetachToGallery()
    {
        $idGallery = Input::get('idGallery');
        $idRelated = Input::get('id');

        $entity = $this->model->find($idGallery);

        $entity->detachToGallery($idRelated);

        return Response::json(array(
            'status' => true
        ));
    }

    public function doSetGalleryPreview()
    {
        $idGallery = Input::get('idGallery');
        $idPreview = Input::get('idPreview');

        $entity = $this->model->find($idGallery);

        $entity->setPreview($idPreview);

        return Response::json(array(
            'status' => true
        ));

    }

    public function doCreateGalleryWith()
    {
        $galleryName = Input::get('galleryName');
        $idArray     = Input::get('idArray', array());

        $fields      = ['title' => $galleryName];

        $entity = $this->model;

        $entity->setFields($fields);

        if(!$entity->save()){
            return Response::json( array( 'status' => false, 'message'   => $entity->getErrorMessage() ));
        }

        $entity->relateToGallery($idArray);

        return Response::json(array(
            'status' => true
        ));
    }

    public function doAddArrayToGalleries()
    {
        $idGalleries = Input::get('idGalleries', array());
        $idArray     = Input::get('idArray', array());

        foreach ($idGalleries as $key => $id) {
            $entity = $this->model->find($id);
            $entity->relateToGallery($idArray);
        }

        return Response::json(array(
            'status' => true
        ));
    }

}
