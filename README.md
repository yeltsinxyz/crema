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

Adiciona alguns filtros de CSS. É diferente do `tailwindcss-blend-mode` que adiciona as propriedades para imagens, principalmente. Os valores padrões estão abaixo. Uma versão escrita em CSS será atualizada em breve (tanto aqui quanto na [documentação oficial](https://github.com/Larsklopstra/tailwindcss-css-filters), ~~se~~ o autor ~~aceitar~~ aceitou minha ajuda rs).

```css
.filter
.filter-blur-2
.filter-blur-4
.filter-blur-8
.filter-blur-16
.filter-blur-32
.filter-blur-64

.hover\:filter-blur-2:hover
.hover\:filter-blur-4:hover
.hover\:filter-blur-8:hover
.hover\:filter-blur-16:hover
.hover\:filter-blur-32:hover
.hover\:filter-blur-64:hover
.focus\:filter-blur-2:focus
.focus\:filter-blur-4:focus
.focus\:filter-blur-8:focus
.focus\:filter-blur-16:focus
.focus\:filter-blur-32:focus
.focus\:filter-blur-64:focus

.filter-brightness-0
.filter-brightness-25
.filter-brightness-50
.filter-brightness-75
.filter-brightness-100
.hover\:filter-brightness-0:hover
.hover\:filter-brightness-25:hover
.hover\:filter-brightness-50:hover
.hover\:filter-brightness-75:hover
.hover\:filter-brightness-100:hover
.focus\:filter-brightness-0:focus
.focus\:filter-brightness-25:focus
.focus\:filter-brightness-50:focus
.focus\:filter-brightness-75:focus
.focus\:filter-brightness-100:focus

.filter-contrast-0
.filter-contrast-25
.filter-contrast-50
.filter-contrast-75
.filter-contrast-100
.hover\:filter-contrast-0:hover
.hover\:filter-contrast-25:hover
.hover\:filter-contrast-50:hover
.hover\:filter-contrast-75:hover
.hover\:filter-contrast-100:hover
.focus\:filter-contrast-0:focus
.focus\:filter-contrast-25:focus
.focus\:filter-contrast-50:focus
.focus\:filter-contrast-75:focus
.focus\:filter-contrast-100:focus

.filter-drop-shadow-sm
.filter-drop-shadow
.filter-drop-shadow-md
.filter-drop-shadow-lg
.filter-drop-shadow-xl
.filter-drop-shadow-2xl
.hover\:filter-drop-shadow-sm:hover
.hover\:filter-drop-shadow:hover
.hover\:filter-drop-shadow-md:hover
.hover\:filter-drop-shadow-lg:hover
.hover\:filter-drop-shadow-xl:hover
.hover\:filter-drop-shadow-2xl:hover
.focus\:filter-drop-shadow-sm:focus
.focus\:filter-drop-shadow:focus
.focus\:filter-drop-shadow-md:focus
.focus\:filter-drop-shadow-lg:focus
.focus\:filter-drop-shadow-xl:focus
.focus\:filter-drop-shadow-2xl:focus

.filter-grayscale-0
.filter-grayscale-25
.filter-grayscale-50
.filter-grayscale-75
.filter-grayscale-100
.hover\:filter-grayscale-0:hover
.hover\:filter-grayscale-25:hover
.hover\:filter-grayscale-50:hover
.hover\:filter-grayscale-75:hover
.hover\:filter-grayscale-100:hover
.focus\:filter-grayscale-0:focus
.focus\:filter-grayscale-25:focus
.focus\:filter-grayscale-50:focus
.focus\:filter-grayscale-75:focus
.focus\:filter-grayscale-100:focus

.filter-hue-rotate-0
.filter-hue-rotate-60
.filter-hue-rotate-90
.filter-hue-rotate-120
.filter-hue-rotate-150
.filter-hue-rotate-180
.filter-hue-rotate-210
.filter-hue-rotate-240
.filter-hue-rotate-270
.filter-hue-rotate-300
.filter-hue-rotate-330
.hover\:filter-hue-rotate-0:hover
.hover\:filter-hue-rotate-60:hover
.hover\:filter-hue-rotate-90:hover
.hover\:filter-hue-rotate-120:hover
.hover\:filter-hue-rotate-150:hover
.hover\:filter-hue-rotate-180:hover
.hover\:filter-hue-rotate-210:hover
.hover\:filter-hue-rotate-240:hover
.hover\:filter-hue-rotate-270:hover
.hover\:filter-hue-rotate-300:hover
.hover\:filter-hue-rotate-330:hover
.focus\:filter-hue-rotate-0:focus
.focus\:filter-hue-rotate-60:focus
.focus\:filter-hue-rotate-90:focus
.focus\:filter-hue-rotate-120:focus
.focus\:filter-hue-rotate-150:focus
.focus\:filter-hue-rotate-180:focus
.focus\:filter-hue-rotate-210:focus
.focus\:filter-hue-rotate-240:focus
.focus\:filter-hue-rotate-270:focus
.focus\:filter-hue-rotate-300:focus
.focus\:filter-hue-rotate-330:focus

.filter-invert-0
.filter-invert-25
.filter-invert-50
.filter-invert-75
.filter-invert-100
.hover\:filter-invert-0:hover
.hover\:filter-invert-25:hover
.hover\:filter-invert-50:hover
.hover\:filter-invert-75:hover
.hover\:filter-invert-100:hover
.focus\:filter-invert-0:focus
.focus\:filter-invert-25:focus
.focus\:filter-invert-50:focus
.focus\:filter-invert-75:focus
.focus\:filter-invert-100:focus

.filter-saturate-0
.filter-saturate-25
.filter-saturate-50
.filter-saturate-75
.filter-saturate-100
.filter-saturate-125
.filter-saturate-150
.filter-saturate-175
.filter-saturate-200
.hover\:filter-saturate-0:hover
.hover\:filter-saturate-25:hover
.hover\:filter-saturate-50:hover
.hover\:filter-saturate-75:hover
.hover\:filter-saturate-100:hover
.hover\:filter-saturate-125:hover
.hover\:filter-saturate-150:hover
.hover\:filter-saturate-175:hover
.hover\:filter-saturate-200:hover
.focus\:filter-saturate-0:focus
.focus\:filter-saturate-25:focus
.focus\:filter-saturate-50:focus
.focus\:filter-saturate-75:focus
.focus\:filter-saturate-100:focus
.focus\:filter-saturate-125:focus
.focus\:filter-saturate-150:focus
.focus\:filter-saturate-175:focus
.focus\:filter-saturate-200:focus

.filter-sepia-0
.filter-sepia-25
.filter-sepia-50
.filter-sepia-75
.filter-sepia-100
.filter-sepia-125
.filter-sepia-150
.filter-sepia-175
.filter-sepia-200
.hover\:filter-sepia-0:hover
.hover\:filter-sepia-25:hover
.hover\:filter-sepia-50:hover
.hover\:filter-sepia-75:hover
.hover\:filter-sepia-100:hover
.hover\:filter-sepia-125:hover
.hover\:filter-sepia-150:hover
.hover\:filter-sepia-175:hover
.hover\:filter-sepia-200:hover
.focus\:filter-sepia-0:focus
.focus\:filter-sepia-25:focus
.focus\:filter-sepia-50:focus
.focus\:filter-sepia-75:focus
.focus\:filter-sepia-100:focus
.focus\:filter-sepia-125:focus
.focus\:filter-sepia-150:focus
.focus\:filter-sepia-175:focus
.focus\:filter-sepia-200:focus.filter
.filter-blur-2
.filter-blur-4
.filter-blur-8
.filter-blur-16
.filter-blur-32
.filter-blur-64

.hover\:filter-blur-2:hover
.hover\:filter-blur-4:hover
.hover\:filter-blur-8:hover
.hover\:filter-blur-16:hover
.hover\:filter-blur-32:hover
.hover\:filter-blur-64:hover
.focus\:filter-blur-2:focus
.focus\:filter-blur-4:focus
.focus\:filter-blur-8:focus
.focus\:filter-blur-16:focus
.focus\:filter-blur-32:focus
.focus\:filter-blur-64:focus

.filter-brightness-0
.filter-brightness-25
.filter-brightness-50
.filter-brightness-75
.filter-brightness-100
.hover\:filter-brightness-0:hover
.hover\:filter-brightness-25:hover
.hover\:filter-brightness-50:hover
.hover\:filter-brightness-75:hover
.hover\:filter-brightness-100:hover
.focus\:filter-brightness-0:focus
.focus\:filter-brightness-25:focus
.focus\:filter-brightness-50:focus
.focus\:filter-brightness-75:focus
.focus\:filter-brightness-100:focus

.filter-contrast-0
.filter-contrast-25
.filter-contrast-50
.filter-contrast-75
.filter-contrast-100
.hover\:filter-contrast-0:hover
.hover\:filter-contrast-25:hover
.hover\:filter-contrast-50:hover
.hover\:filter-contrast-75:hover
.hover\:filter-contrast-100:hover
.focus\:filter-contrast-0:focus
.focus\:filter-contrast-25:focus
.focus\:filter-contrast-50:focus
.focus\:filter-contrast-75:focus
.focus\:filter-contrast-100:focus

.filter-drop-shadow-sm
.filter-drop-shadow
.filter-drop-shadow-md
.filter-drop-shadow-lg
.filter-drop-shadow-xl
.filter-drop-shadow-2xl
.hover\:filter-drop-shadow-sm:hover
.hover\:filter-drop-shadow:hover
.hover\:filter-drop-shadow-md:hover
.hover\:filter-drop-shadow-lg:hover
.hover\:filter-drop-shadow-xl:hover
.hover\:filter-drop-shadow-2xl:hover
.focus\:filter-drop-shadow-sm:focus
.focus\:filter-drop-shadow:focus
.focus\:filter-drop-shadow-md:focus
.focus\:filter-drop-shadow-lg:focus
.focus\:filter-drop-shadow-xl:focus
.focus\:filter-drop-shadow-2xl:focus

.filter-grayscale-0
.filter-grayscale-25
.filter-grayscale-50
.filter-grayscale-75
.filter-grayscale-100
.hover\:filter-grayscale-0:hover
.hover\:filter-grayscale-25:hover
.hover\:filter-grayscale-50:hover
.hover\:filter-grayscale-75:hover
.hover\:filter-grayscale-100:hover
.focus\:filter-grayscale-0:focus
.focus\:filter-grayscale-25:focus
.focus\:filter-grayscale-50:focus
.focus\:filter-grayscale-75:focus
.focus\:filter-grayscale-100:focus

.filter-hue-rotate-0
.filter-hue-rotate-60
.filter-hue-rotate-90
.filter-hue-rotate-120
.filter-hue-rotate-150
.filter-hue-rotate-180
.filter-hue-rotate-210
.filter-hue-rotate-240
.filter-hue-rotate-270
.filter-hue-rotate-300
.filter-hue-rotate-330
.hover\:filter-hue-rotate-0:hover
.hover\:filter-hue-rotate-60:hover
.hover\:filter-hue-rotate-90:hover
.hover\:filter-hue-rotate-120:hover
.hover\:filter-hue-rotate-150:hover
.hover\:filter-hue-rotate-180:hover
.hover\:filter-hue-rotate-210:hover
.hover\:filter-hue-rotate-240:hover
.hover\:filter-hue-rotate-270:hover
.hover\:filter-hue-rotate-300:hover
.hover\:filter-hue-rotate-330:hover
.focus\:filter-hue-rotate-0:focus
.focus\:filter-hue-rotate-60:focus
.focus\:filter-hue-rotate-90:focus
.focus\:filter-hue-rotate-120:focus
.focus\:filter-hue-rotate-150:focus
.focus\:filter-hue-rotate-180:focus
.focus\:filter-hue-rotate-210:focus
.focus\:filter-hue-rotate-240:focus
.focus\:filter-hue-rotate-270:focus
.focus\:filter-hue-rotate-300:focus
.focus\:filter-hue-rotate-330:focus

.filter-invert-0
.filter-invert-25
.filter-invert-50
.filter-invert-75
.filter-invert-100
.hover\:filter-invert-0:hover
.hover\:filter-invert-25:hover
.hover\:filter-invert-50:hover
.hover\:filter-invert-75:hover
.hover\:filter-invert-100:hover
.focus\:filter-invert-0:focus
.focus\:filter-invert-25:focus
.focus\:filter-invert-50:focus
.focus\:filter-invert-75:focus
.focus\:filter-invert-100:focus

.filter-saturate-0
.filter-saturate-25
.filter-saturate-50
.filter-saturate-75
.filter-saturate-100
.filter-saturate-125
.filter-saturate-150
.filter-saturate-175
.filter-saturate-200
.hover\:filter-saturate-0:hover
.hover\:filter-saturate-25:hover
.hover\:filter-saturate-50:hover
.hover\:filter-saturate-75:hover
.hover\:filter-saturate-100:hover
.hover\:filter-saturate-125:hover
.hover\:filter-saturate-150:hover
.hover\:filter-saturate-175:hover
.hover\:filter-saturate-200:hover
.focus\:filter-saturate-0:focus
.focus\:filter-saturate-25:focus
.focus\:filter-saturate-50:focus
.focus\:filter-saturate-75:focus
.focus\:filter-saturate-100:focus
.focus\:filter-saturate-125:focus
.focus\:filter-saturate-150:focus
.focus\:filter-saturate-175:focus
.focus\:filter-saturate-200:focus

.filter-sepia-0
.filter-sepia-25
.filter-sepia-50
.filter-sepia-75
.filter-sepia-100
.filter-sepia-125
.filter-sepia-150
.filter-sepia-175
.filter-sepia-200
.hover\:filter-sepia-0:hover
.hover\:filter-sepia-25:hover
.hover\:filter-sepia-50:hover
.hover\:filter-sepia-75:hover
.hover\:filter-sepia-100:hover
.hover\:filter-sepia-125:hover
.hover\:filter-sepia-150:hover
.hover\:filter-sepia-175:hover
.hover\:filter-sepia-200:hover
.focus\:filter-sepia-0:focus
.focus\:filter-sepia-25:focus
.focus\:filter-sepia-50:focus
.focus\:filter-sepia-75:focus
.focus\:filter-sepia-100:focus
.focus\:filter-sepia-125:focus
.focus\:filter-sepia-150:focus
.focus\:filter-sepia-175:focus
.focus\:filter-sepia-200:focus
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
