

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make("layouts.navbarWelcome", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<nav class="navsobre">
    <div class="unisobre">
        <img src="imagem/image_processing.jpg" alt="" class="sobreimg">
    <article class="doze-colunas page">
            <header>
                <h2 class="sobreh1">Sobre a Unilab</h2>
            </header>
         <div class="sobrep">
            <p class="sobrepp"><strong>No princípio está a cooperação solidária entre os povos</strong></p>

            <p style="text-align: justify">Em outubro de 2008, criou-se a Comissão de Implantação da Universidade da Integração Internacional da <br>Lusofonia Afro- Brasileira (Unilab) que,ao longo de dois anos, desenvolveu uma série de atividades<br>  relacionadas  ao planejamento institucional,  a organização da estrutura acadêmica  <br> curricular e a administração de pessoal, patrimônio, orçamento e finanças, etc.</p>
               
            <p style="text-align: justify">Além disso, foram analisadas propostas e diretrizes elaboradas por entidades vinculadas ao <br>desenvolvimento da educação superior no mundo, privilegiando temas propícios ao intercâmbio de <br> conhecimentos na perspectiva da cooperação solidária, além de sua aderência às demandas nacionais, <br>relevância e impacto em políticas de desenvolvimento econômico e social.</p>

            <p style="text-align: justify">Em 20 de julho de 2010, a Presidência da República sancionou a Lei nº 12.289 instituindo a Unilab como<br> Universidade Pública Federal.</p>
             
            <p style="text-align: justify">Desta forma, a Unilab nasce baseada nos princípios de cooperação solidária entre os povos. Em comum <br> acordo com os países parceiros, tornou realidade a criação de uma universidade no Brasil alinhada à inte-<br>gração com o continente africano, principalmente com as nações que integram a Comunidade dos Países<br> de Língua Portuguesa (CPLP).</p>

            <p style="text-align: justify">Hoje, são milhares de pessoas envolvidas nesse exitoso projeto de uma educação avançada e de qualidade,<br> que vem formando cidadãos capazes de multiplicar o aprendizado e fomentar o desenvolvimento social e <br>econômico no Brasil e no exterior.</p>
        </div>
    </article>
</nav>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fabio Gabriel\Desktop\Unilab-Project\resources\views/sobre.blade.php ENDPATH**/ ?>