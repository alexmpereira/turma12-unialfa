<?php 

class Fabricar {

    public function Fabrica($fabrica) {
        $carro = new Veiculo();
        $carro2 = new Veiculo();
        $carro3 = new Veiculo();
        $carro4 = new Veiculo();

        $cliente = new Cliente();
        $cliente2 = new Cliente();
        $cliente3 = new Cliente();
        $cliente4 = new Cliente();


    $carro->SetMarca("Mazda");
    $carro->SetModelo("RX-7");
    $carro->SetAno("2002");
    $carro->SetCor("Prata");
    $cliente->SetNome("Pedro");

    $carro2->SetMarca("Nissan");
    $carro2->SetModelo("Skyline GT-R34");
    $carro2->SetAno("1998");
    $carro2->SetCor("Azul");
    $cliente2->SetNome("André");

    $carro3->SetMarca("Dodge");
    $carro3->setModelo("Viper SRT");
    $carro3->SetAno("2013");
    $carro3->SetCor("Vermelho");
    $cliente3->SetNome("Thiago");

    $carro4->SetMarca("Honda");
    $carro4->SetModelo("NSX");
    $carro4->SetAno("1995");
    $carro4->SetCor("Branco");  
    $cliente4->SetNome("João");


    }
}


?>