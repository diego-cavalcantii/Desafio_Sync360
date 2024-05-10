<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <header>
        <nav>
            <h1>Sync360</h1>
        </nav>
    </header>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <main>
        <section class="container-infos">
            <div id="box-foto">
                <img id="img-inicial" src="./../img/user-solid.svg" alt="icone usuario">
            </div>
        </section>
        <section id="box-info">
            <ul>
                <li>
                    <span>Nome</span>
                    <p class="nome">{{ $dados->nome }}</p>
                </li>
                <li>
                    <span>Idade</span>
                    <p class="idade">{{ $dados->idade }}</p>
                </li>
                <li>
                    <span>Endereço</span>
                    <p class="endereco">{{ $dados->rua }}, {{ $dados->numero }}, {{ $dados->comple }}</p>
                </li>
                <li class="num">
                    <div>
                        <span>Bairro</span>
                        <p class="bairro">{{ $dados->bairro }}</p>
                    </div>
                    <div>
                        <span>Estado</span>
                        <p class="estado">{{ $dados->estado }}</p>
                    </div>
                </li>
                <li>
                    <span>Bio</span>
                    <p class="bio">{{ $dados->biografia }}</p>
                </li>
            </ul>
        </section>

        <div class="line"></div>
        <button id="update">Atualizar Cadastro</button>
        <section class="container-form remove">
          <div class="wrapper">
            <h1>Atualizar Cadastro</h1>
            <button id="close-update">x</button>
          </div>
            <form id="forms" method="POST" action="/atualizar-dados" enctype="multipart/form-data">
            @csrf
            @method('POST')
              <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="{{ $dados->nome }}" placeholder="Nome ">
              </div>

                  <div>
                    <label for="idade">Idade</label>
                    <input type="number" id="idade" minlength="1" maxlength="3" name="idade" value="{{ $dados->idade }}" placeholder="Idade">
                  </div>

                    <div>
                      <label for="rua">Rua</label>
                      <input type="text" id="rua" name="rua" value="{{ $dados->rua }}" placeholder="Rua ">
                    </div>
                    <div class="num">
                        <div>
                            <label for="numero">Numero</label>
                            <input type="number" id="numero" name="numero" value="{{ $dados->numero }}" placeholder="Numero ">
                        </div>
                        <div>
                            <label for="comple">Complemento</label>
                            <input type="text" id="comple" name="comple" value="{{ $dados->comple }}" placeholder="Complemento ">
                        </div>
                    </div>
                    <div class="num">
                      <div>
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" value="{{ $dados->bairro }}" placeholder="Bairro">
                      </div>
                      <div>
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" >
                          <option  value="{{ $dados->estado }}">{{ $dados->estado }}</option>
                          <option value="Acre - AC">Acre</option>
                          <option value="Alagoas - AL">Alagoas</option>
                          <option value="AmapáAP">Amapá</option>
                          <option value="Amazonas - AM">Amazonas</option>
                          <option value="Bahia - BA">Bahia</option>
                          <option value="Ceará - CE">Ceará</option>
                          <option value="Distrito Federal - DF">Distrito Federal</option>
                          <option value="Espírito Santo - ES">Espírito Santo</option>
                          <option value="Goiás - GO">Goiás</option>
                          <option value="Maranhão - MA">Maranhão</option>
                          <option value="Mato Grosso - MT">Mato Grosso</option>
                          <option value="Mato Grosso do Sul - MS">Mato Grosso do Sul</option>
                          <option value="Mato Grosso do Sul - MG">Minas Gerais</option>
                          <option value="Pará - PA">Pará</option>
                          <option value="Paraíba - PB">Paraíba</option>
                          <option value="Paraná - PR">Paraná</option>
                          <option value="Pernambuco - PE">Pernambuco</option>
                          <option value="Piauí - PI">Piauí</option>
                          <option value="Rio de Janeiro - RJ">Rio de Janeiro</option>
                          <option value="Rio Grande do Norte - RN">Rio Grande do Norte</option>
                          <option value="Rio Grande do Sul - RS">Rio Grande do Sul</option>
                          <option value="Rondônia - RO">Rondônia</option>
                          <option value="Rondônia - RR">Roraima</option>
                          <option value="Santa Catarina - SC">Santa Catarina</option>
                          <option value="São Paulo - SP">São Paulo</option>
                          <option value="Sergipe - SE">Sergipe</option>
                          <option value="Tocantins - TO">Tocantins</option>
                      </select>
                      </div>
                    </div>
                  <div>
                    <label for="biografia">Biografia</label>
                    <textarea id="biografia" name="biografia" value="{{ $dados->biografia }}" placeholder="Bio" wrap="hard" cols="2"></textarea>
                  </div>

                  {{-- <div>
                    <input type="file" id="imageInput" accept="image/jpeg, image/png, image/jpg">
                  </div> --}}

                  <button type="submit">Enviar</button>
                </div>
            </form>
          </section>
    </main>
    <footer class="fixed">
        <p>Diego Silva Cavalcanti</p>
    </footer>
</body>
<script src="./../js/script.js"></script>
</html>
