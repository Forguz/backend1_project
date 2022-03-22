<script>
	import { setContext } from 'svelte';
	import { isMenuVisible } from './stores/menu';
  import { activated } from './stores/hamburguer';

  import Router from "./routes/index.svelte";
  import Header from "./components/Header.svelte";
  import VerticalMenu from "./components/global/VerticalMenu.svelte"

	function toggleMenu() {
    $isMenuVisible = !$isMenuVisible;
  }

  function toggleHamburguer() {
    $activated = !$activated;
  }

  setContext('hamburguer', {
    toggleHamburguer,
    activated
  });

  setContext('menu', {
    toggleMenu,
    isMenuVisible
  });
</script>

<Header />
<main>
  <VerticalMenu />
  <Router />
</main>
