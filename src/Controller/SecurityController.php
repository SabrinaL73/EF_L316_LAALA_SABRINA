<?php



class SecurityController extends AbstractController
{
public function login(AuthentificationUtils $utils): Response
{
    if ($this->getUser()) return $this->redirectToRoute('transaction_index');
    
}

public function logout(): void {throw new \Exception}