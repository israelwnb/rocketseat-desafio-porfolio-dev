<?php
$projetos = [
  [
    'titulo' => "Travelgram",
    'descricao' => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
    'img' => './img/travelgram.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => '',
  ],
  [
    'titulo' => "Página de receita",
    'descricao' => "Página com o passo a passo de uma receita para cupcakes",
    'img' => './img/pagina-de-receita.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => '',
  ],
  [
    'titulo' => "Tech News",
    'descricao' => "Homepage de um portal de notícias sobre a área de tecnologia",
    'img' => './img/tech-news.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => '',
  ],
  [
    'titulo' => "Refund",
    'descricao' => "Um sistema para pedido e acompanhamento de reembolso ",
    'img' => './img/refund.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => ''
  ],
  [
    'titulo' => "Página de turismo",
    'descricao' => "Página com as principais informações para quem quer viajar para Busan",
    'img' => './img/pagina-de-turismo.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => ''
  ],
  [
    'titulo' => "Zingen",
    'descricao' => "Landing Page completa e responsiva de um aplicativo de Karaokê",
    'img' => './img/zingen.png',
    'stack' => ["PHP", "CSS", "HTML", "Javascript"],
    'link' => '',
  ]
];
?>

<main class="w-full py-16 flex flex-col items-center px-4 md:px-20 py-36">
  <div class="w-full text-center">
    <span class="text-red font-subtitle">Meu trabalho</span>
    <h2 class="text-gray-100 text-xl font-title font-bold">Veja os projetos em destaque</h2>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 px-6">
    <?php foreach ($projetos as $projeto) : ?>
      <div class="w-full bg-gray-400 rounded-[12px] outline-0 hover:outline hover:outline-1 hover:outline-gray-300 transition">
        <a class="flex flex-row gap-4 p-4" href="<?= $projeto['link'] ?>" target="_blank">
          <img class="w-[224px] h-[156px] rounded-[8px]" src="<?= $projeto['img'] ?>" alt="<?= $projeto['titulo'] ?>">
          <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
            <div class="space-y-2">
              <span class="font-title font-bold text-sm text-gray-100"><?= $projeto['titulo'] ?></span>
              <p class="font-text text-sm text-gray-200"><?= $projeto['descricao'] ?></p>
            </div>

            <!-- Stacks-->
            <div class="flex flex-wrap w-full gap-2">
              <?php
              $colors = [
                "Github" => "green",
                "PHP" => "purple",
                "CSS" => "blue",
                "HTML" => "red",
                "Javascript" => "yellow"
              ];
              foreach ($projeto['stack'] as $stack) : ?>
                <span class="w-auto h-auto px-2 py-1 text-gray-500 text-tag text-[12px] font-bold rounded-full bg-<?= $colors[$stack] ?>">
                  <?= $stack ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</main>