<script>
	import { getContext, onMount, setContext } from 'svelte';
	import { isMenuVisible } from './stores/menu';

  import Router from "./routes/index.svelte";
  import Header from "./components/Header.svelte";

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
  <Router />
</main>
