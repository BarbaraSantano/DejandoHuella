<?php

namespace App\Test\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AnimalControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private AnimalRepository $repository;
    private string $path = '/animal/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Animal::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Animal index');

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
            'animal[nombre]' => 'Testing',
            'animal[fecha_nacimiento]' => 'Testing',
            'animal[sexo]' => 'Testing',
            'animal[especie]' => 'Testing',
            'animal[raza]' => 'Testing',
            'animal[esterilizado]' => 'Testing',
            'animal[test]' => 'Testing',
            'animal[edad]' => 'Testing',
            'animal[tamano]' => 'Testing',
            'animal[descripcion]' => 'Testing',
            'animal[padrino]' => 'Testing',
        ]);

        self::assertResponseRedirects('/animal/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Animal();
        $fixture->setNombre('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setSexo('My Title');
        $fixture->setEspecie('My Title');
        $fixture->setRaza('My Title');
        $fixture->setEsterilizado('My Title');
        $fixture->setTest('My Title');
        $fixture->setEdad('My Title');
        $fixture->setTamano('My Title');
        $fixture->setDescripcion('My Title');
        $fixture->setPadrino('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Animal');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Animal();
        $fixture->setNombre('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setSexo('My Title');
        $fixture->setEspecie('My Title');
        $fixture->setRaza('My Title');
        $fixture->setEsterilizado('My Title');
        $fixture->setTest('My Title');
        $fixture->setEdad('My Title');
        $fixture->setTamano('My Title');
        $fixture->setDescripcion('My Title');
        $fixture->setPadrino('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'animal[nombre]' => 'Something New',
            'animal[fecha_nacimiento]' => 'Something New',
            'animal[sexo]' => 'Something New',
            'animal[especie]' => 'Something New',
            'animal[raza]' => 'Something New',
            'animal[esterilizado]' => 'Something New',
            'animal[test]' => 'Something New',
            'animal[edad]' => 'Something New',
            'animal[tamano]' => 'Something New',
            'animal[descripcion]' => 'Something New',
            'animal[padrino]' => 'Something New',
        ]);

        self::assertResponseRedirects('/animal/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNombre());
        self::assertSame('Something New', $fixture[0]->getFecha_nacimiento());
        self::assertSame('Something New', $fixture[0]->getSexo());
        self::assertSame('Something New', $fixture[0]->getEspecie());
        self::assertSame('Something New', $fixture[0]->getRaza());
        self::assertSame('Something New', $fixture[0]->getEsterilizado());
        self::assertSame('Something New', $fixture[0]->getTest());
        self::assertSame('Something New', $fixture[0]->getEdad());
        self::assertSame('Something New', $fixture[0]->getTamano());
        self::assertSame('Something New', $fixture[0]->getDescripcion());
        self::assertSame('Something New', $fixture[0]->getPadrino());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Animal();
        $fixture->setNombre('My Title');
        $fixture->setFecha_nacimiento('My Title');
        $fixture->setSexo('My Title');
        $fixture->setEspecie('My Title');
        $fixture->setRaza('My Title');
        $fixture->setEsterilizado('My Title');
        $fixture->setTest('My Title');
        $fixture->setEdad('My Title');
        $fixture->setTamano('My Title');
        $fixture->setDescripcion('My Title');
        $fixture->setPadrino('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/animal/');
    }
}
