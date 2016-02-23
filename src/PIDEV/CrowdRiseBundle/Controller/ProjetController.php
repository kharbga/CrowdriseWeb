<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Form\AjoutProjetForm;
use PIDEV\CrowdRiseBundle\Form\UpdateForm;
use PIDEV\CrowdRiseBundle\Form\RechercheProjetForm;
use PIDEV\CrowdRiseBundle\Entity\Projet;

class ProjetController extends Controller {

    public function AjouterProjetAction() {

        $project = new Projet();
        $form = $this->createForm(new AjoutProjetForm(), $project);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isValid()) {
            $project->setDateProjet( new \DateTime());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush();
            return $this->redirect($this->generateUrl('pidev_crowd_rise_accueil'));
        }
        return $this->render('PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig', array('Form' => $form->createView()));
    }

    public function listProjetAction() {

        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('PIDEVCrowdRiseBundle:Projet')->findAll();
        return $this->render('PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig', array('projets' => $image));
    }
    
    public function ModifierProjetAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('PIDEVCrowdRiseBundle:Projet')->find($id);
        $Form = $this->createForm(new UpdateForm(), $project);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);

        if ($Form->isValid()) {

            $em->persist($project);
            $em->flush();
            return $this->redirect($this->generateUrl('pidev_crowd_rise_ListProjet'));
        }
        return $this->render("PIDEVCrowdRiseBundle:Projet:ModifierProjet.html.twig", array('Form' => $Form->createView(), 'projet' => $project));
    }
    public function SupprimerProjetAction($id) {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('PIDEVCrowdRiseBundle:Projet')->find($id);
        $em->remove($project);
        $em->flush();
        return $this->redirect($this->generateUrl('pidev_crowd_rise_ListProjet'));
    }
    public function RechercherProjetAction() {
       $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('PIDEVCrowdRiseBundle:Projet')->findAll();
        return $this->render('PIDEVCrowdRiseBundle:Projet:RechercherProjet.html.twig', array('projets' => $image));
    }

}