# CREMA

Tema do site Yeltsin, feito em WordPress. Usando [Tailwind](https://tailwindcss.com) para o CSS.

## Instalação

Você pode instalar diretamente, baixando o arquivo .zip em releases. Ou "clonando" este repositório e fazendo seus ajustes :)

### Alguns comandos essenciais

`npx tailwindcss build src/css/theme.css -o dist/css/theme.css`

Converte o arquivo `src/css/theme.css` para um arquivo CSS válido.

No caso do ambiente colocado em "produção", ele vai comprimir o arquivo para ficar em um tamanho aceitável.

`yarn add` ou `npm install`

Instala as dependências do `package.json`.

## Extensões

### tailwindcss-blend-mode

Adiciona algumas propriedades de edição de imagem pelo CSS. Útil para ser usado em certos efeitos.

```css
.blend-normal { mix-blend-mode: normal; }
.blend-multiply { mix-blend-mode: multiply; }
.blend-screen { mix-blend-mode: screen; }
.blend-overlay { mix-blend-mode: overlay; }
.blend-darken { mix-blend-mode: darken; }
.blend-lighten { mix-blend-mode: lighten; }
.blend-color-dodge { mix-blend-mode: color-dodge; }
.blend-color-burn { mix-blend-mode: color-burn; }
.blend-hard-light { mix-blend-mode: hard-light; }
.blend-soft-light { mix-blend-mode: soft-light; }
.blend-difference { mix-blend-mode: difference; }
.blend-exclusion { mix-blend-mode: exclusion; }
.blend-hue { mix-blend-mode: hue; }
.blend-saturation { mix-blend-mode: saturation; }
.blend-color { mix-blend-mode: color; }
.blend-luminosity { mix-blend-mode: luminosity; }

.bg-blend-normal { background-blend-mode: normal; }
.bg-blend-multiply { background-blend-mode: multiply; }
.bg-blend-screen { background-blend-mode: screen; }
.bg-blend-overlay { background-blend-mode: overlay; }
.bg-blend-darken { background-blend-mode: darken; }
.bg-blend-lighten { background-blend-mode: lighten; }
.bg-blend-color-dodge { background-blend-mode: color-dodge; }
.bg-blend-color-burn { background-blend-mode: color-burn; }
.bg-blend-hard-light { background-blend-mode: hard-light; }
.bg-blend-soft-light { background-blend-mode: soft-light; }
.bg-blend-difference { background-blend-mode: difference; }
.bg-blend-exclusion { background-blend-mode: exclusion; }
.bg-blend-hue { background-blend-mode: hue; }
.bg-blend-saturation { background-blend-mode: saturation; }
.bg-blend-color { background-blend-mode: color; }
.bg-blend-luminosity { background-blend-mode: luminosity; }

.isolation-isolate { isolation: isolate; }
.isolation-auto { isolation: auto; }
```

### tailwindcss-css-filters

Adiciona alguns filtros de CSS. É diferente do `tailwindcss-blend-mode` que adiciona as propriedades para imagens, principalmente. Os valores padrões estão abaixo. Uma versão escrita em CSS será atualizada em breve (tanto aqui quanto na documentação oficial, se o autor aceitar minha ajuda rs).

```js
const filters = [
  {
    name: 'blur',
    theme: {
      2: '2px',
      4: '4px',
      8: '8px',
      16: '16px',
      32: '32px',
      64: '64px',
    },
  },
  {
    name: 'brightness',
    theme: {
      0: '0',
      '1/4': '0.25',
      '1/2': '0.5',
      '3/4': '0.75',
      1: '1',
    },
  },
  {
    name: 'contrast',
    theme: {
      0: '0',
      '1/4': '0.25',
      '1/2': '0.5',
      '3/4': '0.75',
      1: '1',
    },
  },
  {
    name: 'dropShadow',
    theme: {
      sm: '0 1px 2px rgba(0, 0, 0, 0.05)',
      default: '0 1px 3px rgba(0, 0, 0, 0.1)',
      md: '0 4px 6px rgba(0, 0, 0, 0.1)',
      lg: '0 10px 15px rgba(0, 0, 0, 0.1)',
      xl: '0 20px 25px rgba(0, 0, 0, 0.1)',
      '2xl': '0 25px 50px rgba(0, 0, 0, 0.25)',
    },
  },
  {
    name: 'grayscale',
    theme: {
      0: '0%',
      '1/4': '0.25',
      '1/2': '0.5',
      '3/4': '0.75',
      1: '1',
    },
  },
  {
    name: 'hueRotate',
    theme: {
      0: '0deg',
      60: '60deg',
      90: '90deg',
      120: '120deg',
      150: '150deg',
      180: '180deg',
      210: '210deg',
      240: '240deg',
      270: '270deg',
      300: '300deg',
      330: '330deg',
    },
  },
]
```



## Observações

Muitas partes do tema são `hard-coded`, ou seja, o HTML está inserido diretamente do PHP. É algo inclusive bastante debatido no WordPress, mas a questão principal é performance. Se eu deixasse dinâmico certas partes que não mudarão com frequência, eu teria um carregamento extra desnecessário.

- [WordPress Performance](https://codex.wordpress.org/WordPress_Optimization/WordPress_Performance)
- [WordPress Offloading](https://codex.wordpress.org/WordPress_Optimization/Offloading)

Algumas partes que são `hard-coded`: partes do cabeçalho, o rodapé, elementos como `call to actions`.

## Curiosidades

O nome Crema é o nome da cidade do filme `Call Me By Your Name`. No filme não é informado, mas é onde foram feitas as filmagens.

## Badges

![GitHub issues](https://img.shields.io/github/issues/yeltsinxyz/crema) ![GitHub followers](https://img.shields.io/github/followers/yeltsinxyz?label=Siga-me&style=social) ![Twitter Follow](https://img.shields.io/twitter/follow/yeltsinxyz?label=Siga-me&style=social)
