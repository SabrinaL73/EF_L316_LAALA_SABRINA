namespace app\Controller;
use app\Entity\Category;






#[Route('/category')]
#[IsGranted('ROLE_USER')]

class CategoryController extends AbstractController 
{
    #[Route('/', name: 'category_index', methods: ['GET'])]
    public fonction index(CategoryRepository $repo): Response 
}

#[Route('new/category'name: 'category_new', methods: ['GET', 'POST'])]
public function new(Request $req, EntityManagerInterface $em): Response {
    $c = new Category();
    $form: $this->createForm(CategoryType::class, $c);
    $form->handleRequest($req);
}


 #[Route('/{id}/delete', name: 'category_delete', methods: ['POST'])] 
 public function delete(Request $req, Category $c, EntityManagerInterface $em): Reponse{
    if ($c->getOwner()!==$this->getUser()) throw $this->createAccessDenied();
    return $this->redirectToRoute('category_index'); 