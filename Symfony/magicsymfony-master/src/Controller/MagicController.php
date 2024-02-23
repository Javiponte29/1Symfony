<?php

// src/Controller/MagicController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagicController extends AbstractController{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/magic/number', name: 'magic_number')]
    public function magicNumber(): Response
    {
        $magicNumber = mt_rand(1, 25);
        return $this->render('magic_number.html.twig', [
            'magicNumber' => $magicNumber,
        ]);
    }

    #[Route('/magic/{number}', name: 'magic_word')]
    public function magicWord($number): Response
    {
        $magicWords = [
            1 => 'Lionel Messi',
            2 => 'Cristiano Ronaldo',
            3 => 'Neymar Jr.',
            4 => 'Robert Lewandowski',
            5 => 'Kevin De Bruyne',
            6 => 'Kylian Mbappé',
            7 => 'Mohamed Salah',
            8 => 'Virgil van Dijk',
            9 => 'Sadio Mané',
            10 => 'Sergio Ramos',
            11 => 'Luka Modrić',
            12 => 'Harry Kane',
            13 => 'Antoine Griezmann',
            14 => 'Eden Hazard',
            15 => 'Paul Pogba',
            16 => 'Bruno Fernandes',
            17 => 'Joshua Kimmich',
            18 => 'Robert Firmino',
            19 => 'Raheem Sterling',
            20 => 'Karim Benzema',
            21 => 'Alisson Becker',
            22 => 'Thiago Silva',
            23 => 'Trent Alexander-Arnold',
            24 => 'Marc-André ter Stegen',
            25 => 'Jan Oblak'
        ];
        
        $magicWord = $magicWords[$number] ?? '';
        
        return $this->render('magic_word.html.twig', [
            'magicNumber' => $number,
            'magicWord' => $magicWord,
        ]);
    }

    #[Route('/dictionary/{word}', name: 'dictionary')]
    public function dictionary($word): Response
    {
        $definitions = [
            'Lionel Messi' => "O xenio arxentino que deslumbra coa súa maxia no campo de xogo.",
            'Cristiano Ronaldo' => "Unha lenda vivente cuxa determinación e habilidade o elevan por riba de todos.",
            'Neymar Jr.' => "O xogador brasileiro cun estilo único e un talento deslumbrante.",
            'Robert Lewandowski' => "O depredador do área cuxa precisión e determinación son incomparables.",
            'Kevin De Bruyne' => "O cerebro do medio campo, capaz de cambiar o curso do xogo cun só pase.",
            'Kylian Mbappé' => "O xoven prodixio que deslumbra coa súa velocidade e habilidade no campo.",
            'Mohamed Salah' => "O faraón exipcio cuxa velocidade e habilidade o converten nun terror para as defensas rivais.",
            'Virgil van Dijk' => "A muralla defensiva que impón respecto en cada partido.",
            'Sadio Mané' => "O extremo veloz e habilidoso que desborda aos seus rivais con facilidade.",
            'Sergio Ramos' => "O líder indiscutible que combina dureza defensiva con goles cruciais en momentos clave.",
            'Luka Modrić' => "O mestre do centro do campo, cuxa visión e precisión no pase son incomparables.",
            'Harry Kane' => "O depredador do área que non perdoa ningunha oportunidade fronte á porta.",
            'Antoine Griezmann' => "O dianteiro francés cunha habilidade excepcional para o regate e o remate.",
            'Eden Hazard' => "O maxo belga que deslumbra co seu dribbling e creatividade no campo.",
            'Paul Pogba' => "O centrocampista francés cunha combinación única de forza física e habilidade técnica.",
            'Bruno Fernandes' => "O mestre dos tiros libres e os pases de fantasía que lidera o medio campo.",
            'Joshua Kimmich' => "O versátil xogador alemán capaz de desempeñarse con mestura en múltiples posicións.",
            'Robert Firmino' => "O dianteiro brasileiro coñecido pola súa intelixencia táctica e a súa capacidade para crear oportunidades para os seus compañeiros.",
            'Raheem Sterling' => "O extremo inglés cunha velocidade e habilidade deslumbrantes que desequilibran ás defensas rivais.",
            'Karim Benzema' => "O dianteiro francés cunha capacidade excepcional para combinar cos seus compañeiros e finalizar xogadas.",
            'Alisson Becker' => "O porteiro brasileiro cuxos reflejos felinos e seguridade na porta o converten nun dos mellores do mundo.",
            'Thiago Silva' => "O defensor brasileiro cunha lectura excepcional do xogo e unha capacidade para liderar dende a retagarda.",
            'Trent Alexander-Arnold' => "O lateral inglés cunha precisión mortífera nos seus centros e unha visión de xogo excepcional.",
            'Marc-André ter Stegen' => "O porteiro alemán cunha habilidade excepcional para xogar cos pés e realizar paradas imposibles.",
            'Jan Oblak' => "O porteiro esloveno con reflejos felinos e unha capacidade para manter a súa porta imbatida."
           
        ];

        
        $definition = $definitions[$word] ?? '';

        return $this->render('dictionary.html.twig', [
            'magicWord' => $word,
            'definition' => $definition,
        ]);
    }   
    
}
