<?php
$stacks = ["Github", "PHP", "CSS", "HTML", "Javascript"];
?>

<header class="bg-header bg-cover bg-center w-full h-full flex items-center justify-between py-20">
  <div class="mx-auto max-w-screen-lg h-auto flex flex-col items-center space-y-20">
    <div class="flex flex-col items-center space-y-14 h-auto px-4 md:px-44">
      <!-- Foto -->
      <div class="flex justify-center h-20 w-20 md:h-24 md:w-24 border border-red rounded-full">
        <img class="h-18 w-18 md:h-22 md:w-22 bg-cover bg-center rounded-full" src="./img/avatar.svg" alt="Foto de Israel Barreto" />
      </div>

      <!-- Intro -->
      <div class="space-y-5">
        <div class="flex flex-col items-center justify-center">
          <span class="font-subtitle font bold text-lg md:text-xl text-gray-200">
            Hello World! Meu nome é <span class="text-red">Israel Barreto</span> e sou
          </span>

          <span class="font-title font-bold text-[56px] text-gray-100">
            Desenvolvedor PHP
          </span>
        </div>
        <div class="font-text text-sm text-gray-300 text-center px-2 md:px-0">
          Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
        </div>
      </div>
    </div>

    <!-- Stacks -->
    <div class="flex flex-wrap justify-center gap-3">
      <?php
      $colors = [
        "Github" => "green",
        "PHP" => "purple",
        "CSS" => "blue",
        "HTML" => "red",
        "Javascript" => "yellow"
      ];
      foreach ($stacks as $stack) :
      ?>
        <span class="w-auto h-auto px-3 py-1 text-gray-500 text-tag text-[16px] font-bold rounded-full bg-<?= $colors[$stack] ?>">
          <?= $stack ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</header>