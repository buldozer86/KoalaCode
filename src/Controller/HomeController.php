<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
    */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $errors = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();

        return $this->render('login/login.html.twig', [
            'errors' => $errors,
            'username' => $lastUserName
        ]);
    }

    /**
     * @Route("/logout", name="logout")
    */
    public function logoutAction()
    {

    }

    /**
     * @Route("/registration", name="registration")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return Response
     */
    public function registrationAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dataTime = new \DateTime("now");

            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $user->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
            $user->setKarma(100);
            $user->setCreateDate($dataTime);
            $user->setUpdateDate($dataTime);
            $em->persist($user);
            $em->flush();

            return $this->redirect('/');
        }

        return $this->render('registre/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}