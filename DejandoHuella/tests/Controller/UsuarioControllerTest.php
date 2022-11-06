<?php

namespace App\Test\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsuarioControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private UsuarioRepository $repository;
    private string $path = '/usuario/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Usuario::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Usuario index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'usuario[email]' => 'Testing',
            'usuario[roles]' => 'Testing',
            'usuario[password]' => 'Testing',
            'usuario[telefono]' => 'Testing',
            'usuario[nombre]' => 'Testing',
            'usuario[apellido]' => 'Testing',
            'usuario[direccion]' => 'Testing',
            'usuario[fecha_nacimiento]' => 'Testing',
            'usuario[iban]' => 'Testing',
            'usuario[isVerified]' => 'Testing',
            'usuario[acoge]' => 'Testing',
            'usuario[adopta]' => 'Testing',
            'usuario[padrino]' => 'Testing',
            'usuario[socio]' => 'Testing',
        ]);

        self::assertResponseRedirects('/usuario/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Usuario();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setNombre('My Title');
        $fixture->setApellido('My Title');
        $fixture->setDireccion('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setIban('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setAcoge('My Title');
        $fixture->setAdopta('My Title');
        $fixture->setPadrino('My Title');
        $fixture->setSocio('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Usuario');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Usuario();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setNombre('My Title');
        $fixture->setApellido('My Title');
        $fixture->setDireccion('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setIban('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setAcoge('My Title');
        $fixture->setAdopta('My Title');
        $fixture->setPadrino('My Title');
        $fixture->setSocio('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'usuario[email]' => 'Something New',
            'usuario[roles]' => 'Something New',
            'usuario[password]' => 'Something New',
            'usuario[telefono]' => 'Something New',
            'usuario[nombre]' => 'Something New',
            'usuario[apellido]' => 'Something New',
            'usuario[direccion]' => 'Something New',
            'usuario[fecha_nacimiento]' => 'Something New',
            'usuario[iban]' => 'Something New',
            'usuario[isVerified]' => 'Something New',
            'usuario[acoge]' => 'Something New',
            'usuario[adopta]' => 'Something New',
            'usuario[padrino]' => 'Something New',
            'usuario[socio]' => 'Something New',
        ]);

        self::assertResponseRedirects('/usuario/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getRoles());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getTelefono());
        self::assertSame('Something New', $fixture[0]->getNombre());
        self::assertSame('Something New', $fixture[0]->getApellido());
        self::assertSame('Something New', $fixture[0]->getDireccion());
        self::assertSame('Something New', $fixture[0]->getFecha_nacimiento());
        self::assertSame('Something New', $fixture[0]->getIban());
        self::assertSame('Something New', $fixture[0]->getIsVerified());
        self::assertSame('Something New', $fixture[0]->getAcoge());
        self::assertSame('Something New', $fixture[0]->getAdopta());
        self::assertSame('Something New', $fixture[0]->getPadrino());
        self::assertSame('Something New', $fixture[0]->getSocio());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Usuario();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setTelefono('My Title');
        $fixture->setNombre('My Title');
        $fixture->setApellido('My Title');
        $fixture->setDireccion('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setIban('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setAcoge('My Title');
        $fixture->setAdopta('My Title');
        $fixture->setPadrino('My Title');
        $fixture->setSocio('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/usuario/');
    }
}
