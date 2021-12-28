@extends('layouts.main')

@section('content')

@section('title', 'Sobre')

@include('layouts.navbarWelcome')

@section("content")
  
<section class="sessao-conhecimentos">
  <div class="sessao-header">
    <h1>UNILAB</h1>
  </div>
  <div class="conhecimentos">
    <div class="conhecimento">
      <div class="conhecimento-header">
        <h3>BREVE HISTÓRICO</h3>
      </div>
      <div class="conhecimento-text">
        <p class="text-justify">A Pró-Reitoria de Extensão, Arte e Cultura – PROEX, criada em novembro de 2012, mediante
          ato normativo da
          Universidade da Integração Internacional da Lusofonia Afro-Brasileira – UNILAB, já contava, no momento de sua
          implementação, com um histórico de ações extensionistas que aconteceram, anteriormente, alocadas na
          Coordenação de Extensão – dentro da Pró Reitoria de Pesquisa e Pós-Graduação.</p>
      </div>
    </div>
    <div class="conhecimento">
      <div class="conhecimento-header">
        <h3>MISSÃO</h3>
      </div>
      <div class="conhecimento-text">
        <p class="text-justify">Promover a extensão universitária da Unilab focado na realidade local, nacional e
          internacional, visando o
          diálogo, troca de saberes e a produção de conhecimentos junto a coletivos sociais, étnicos e raciais em sua
          diversidade cultural.</p>
      </div>
    </div>
    <div class="conhecimento">
      <div class="conhecimento-header">
        <h3>VISÃO</h3>
      </div>
      <div class="conhecimento-text">
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam odio obcaecati, eos
          tempora praesentium
          facere voluptatem aliquid nam, repellat expedita veniam maxime neque et? Numquam asperiores illo eligendi iure
          atqueSer reconhecida pela sociedade e na Unilab pelo trabalho realizado na interação dialógica com os diversos
          segmentos sociais, nacional e Internacional.</p>
      </div>
    </div>
    {{-- <div class="conhecimento">
      <div class="conhecimento-header">
        <i class="fab fa-bootstrap"></i>
        <h3>BOOTSTRAP</h3>
      </div>
      <div class="conhecimento-text">
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque at tenetur ducimus esse
          voluptatibus eveniet
          reiciendis? Recusandae in eos iusto perspiciatis suscipit? Iure labore.</p>
      </div>
    </div> --}}
    <div class="conhecimento">
      <div class="conhecimento-header">
        <h3>ESTRUTURA</h3>
      </div>
      <div class="conhecimento-text">
        <p class="text-justify">A PROEX é constituída pela gestão da Pró-reitoria e pela ação articulada de duas
          Coordenações:

          Coordenação de Extensão e Assuntos Comunitários;
          Coordenação de Arte e Cultura.</p>
      </div>
    </div>
    <div class="conhecimento-img-wrapper">
      <img src="/imagem/unilabsimbolo.png" alt="imagem conhecimento">
    </div>
  </div>
</section>


</div>

@include('layouts.footer')


@endsection
