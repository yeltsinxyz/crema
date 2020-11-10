# CREMA

Tema do site Yeltsin, feito em WordPress. Usando (Tailwind)<https://tailwindcss.com> para o CSS.

## Instalação

Você pode instalar diretamente, baixando o arquivo .zip em releases. Ou "clonando" este repositório e fazendo seus ajustes :)

### Alguns comandos essenciais

`npx tailwindcss build src/css/theme.css -o dist/css/theme.css`

Converte o arquivo `src/css/theme.css` para um arquivo CSS válido. No caso do ambiente colocado em "produção", ele vai comprimir o arquivo para ficar em um tamanho aceitável.

## Observações

Muitas partes do tema são `hard-coded`, ou seja, o HTML está inserido diretamente do PHP. É algo inclusive bastante debatido no WordPress, mas a questão principal é performance. Se eu deixasse dinâmico certas partes que não mudarão com frequência, eu teria um carregamento extra desnecessário.

- (WordPress Performance)<https://codex.wordpress.org/WordPress_Optimization/WordPress_Performance>
- (WordPress Offloading)<https://codex.wordpress.org/WordPress_Optimization/Offloading>

Algumas partes que são `hard-coded`: algumas partes do cabeçalho, o rodapé, alguns elementos como `call to actions`.
