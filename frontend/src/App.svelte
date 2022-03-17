<script>
	import { setContext } from 'svelte';
	import { isMenuVisible } from './stores/menu';

  import Router from "./routes/index.svelte";
  import Header from "./components/Header.svelte";
  import VerticalMenu from "./components/global/VerticalMenu.svelte"

	function toggleMenu() {
    $isMenuVisible = !$isMenuVisible;
  }

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
