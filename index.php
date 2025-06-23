<?php

$links_contato = [
  [
    'network' => 'Linkedin',
    'logo' => 'ph ph-linkedin-logo',
    'url' => '',
  ],
  [
    'network' => 'Instagram',
    'logo' => 'ph ph-instagram-logo',
    'url' => '',
  ],
  [
    'network' => 'GitHub',
    'logo' => 'ph ph-github-logo',
    'url' => '',
  ],
  [
    'network' => 'Email',
    'logo' => 'ph ph-envelope-simple',
    'url' => '',
  ],
];


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'red': '#E3646E',
            'purple': '#BB72E9',
            'blue': '#3996DB',
            'green': '#82BC4F',
            'yellow': '#EABD5F',
            'gray-600': '#0D0E11',
            'gray-500': '#16181D',
            'gray-400': '#292C34',
            'gray-300': '#878EA1',
            'gray-200': '#C0C4CE',
            'gray-100': '#E2E4E9',
          },
          fontFamily: {
            title: ['Asap'],
            subtitle: ['Inconsolata'],
            tag: ['Inconsolata'],
            text: ['Maven Pro'],
          },
          backgroundImage: {
            'header': "url('/img/bg-header.png')",
            'footer': "url('/img/bg-footer.png')",
          },
        }
      }
    }
  </script>

  <title>Portfólio Dev</title>
</head>

<body class="bg-gray-500 py-6">
  <!-- Header -->
  <?php include('./components/header.php'); ?>

  <!-- Projetos -->
  <?php include('./components/projetos.php'); ?>

  <!-- Footer -->
  <footer class="w-full h-full bg-footer bg-cover bg-center flex flex-col items-center mx-30 pt-24 pb-32 mb-50 gap-12">
    <div class="flex flex-col items-center gap-2">
      <span class="text-purple font-subtitle text-[20px]">Contato</span>
      <span class="text-gray-100 font-title font-bold text-[24px]">Gostou do meu trabalho?</span>
      <p class="text-gray-200 text-[16px] font-text">Entre em contato ou acompanhe minhas redes sociais!</p>
    </div>
    <div class="w-[400px] flex flex-col gap-4">
      <?php foreach ($links_contato as $link) : ?>
        <div class="bg-gray-400 rounded-[8px] w-full cursor-pointer outline-0 hover:outline hover:outline-1 hover:outline-blue transition group">
          <a class="flex items-center justify-between px-5 py-5 gap-3" href="<?= $link['url'] ?>">
            <span class="text-gray-300 text-[28px] group-hover:text-blue"><i class="<?= $link['logo'] ?>"></i></span>
            <span class="flex-1 font-text text-[16px] text-gray-200 font-medium"><?= $link['network'] ?></span>
            <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </footer>
</body>

</html>