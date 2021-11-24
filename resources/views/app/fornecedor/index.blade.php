<h3>fornecedor</h3>

{{--
  @if()/@elseif()/@else/@endif -> possuem equivalentes no php
  @switch()/@case()/@break/@default/@endswitch -> possuem equivalentes no php
  @unset/@endunset -> equivalente a uma negação no php (!) dentro de uma condicional
  @isset/@endisset -> equivalente ao isset() dentro de uma condicional
  @empty/@endempty -> equivalente ao empty dentro de condicional
    - valores considerados vazios: '', 0, 0.0, '0', null, false, array() - sem nada dentro, $var - declarado sem atribuição
  @for(var=0;var < 10;var++)/@endfor -> possuem equivalentes no php
  @while(condicao)/@php var = 0 @endphp/@php var++ @endphp/@endwhile -> possuem equivalentes no php
  @foreach(var as indice => apelido)/@endforeach ->possuem equivalentes no php
    - para mudar o valor original como referencia: $var[$indice][posicao_desejada] = 'novo conteudo'
  @forelse(var as indice => apelido)/@empty/@endforelse -> semelhante ao foreach porém se estiver vazio ele toma uma decisão programada
  @{{ conteudo }} -> dessa forma o conteudo nao é interpretado, é escrito da forma como está semelhante a um texto dentro de ''
  $loop -> acessa informações sobre o loop, criado automaticamente pelo blade. existe apenas no @foreach e @forelse
   - $loop->iteration: iteração atual começando do 1 e incrementando a cada volta
   - $loop->first: primeira true = true
   - $loop->last: ultima true = true
   - $loop->count: quantidade de registros semelhante ao count()

--}}
