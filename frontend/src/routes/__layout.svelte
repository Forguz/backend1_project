<script>
	import { setContext } from 'svelte';
	import { isMenuVisible } from '../stores/menu';
	import { activated } from '../stores/hamburguer';
  import VerticalMenu from "$lib/global/VerticalMenu.svelte"
	import Header from '$lib/global/Header.svelte';

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
<VerticalMenu />
<main>
	<slot />
</main>

<style>
	:root {
		--background-color: #ffffff;
		--primary-color: #291211;
		--accent-color: #f8cf2c;
		--font-color: #252827;
		--font-color-white: #fffee6;
		--logo-shadow: -12px 12px 6px 0px #00000040, 0px 4px 4px 0px #00000040;
		--inset-shadow: 0 3px 6px 0 inset #00000040, 0 2px 10px 0 inset #00000040;

		--elevation-1dp: 0px 1px 3px 0px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14),
			0px 2px 1px -1px rgba(0, 0, 0, 0.12);

		--elevation-2dp: 0px 1px 5px 0px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14),
			0px 3px 1px -2px rgba(0, 0, 0, 0.12);

		--elevation-3dp: 0px 1px 8px 0px rgba(0, 0, 0, 0.2), 0px 3px 4px 0px rgba(0, 0, 0, 0.14),
			0px 3px 3px -2px rgba(0, 0, 0, 0.12);

		--elevation-4dp: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14),
			0px 1px 10px 0px rgba(0, 0, 0, 0.12);

		--elevation-5dp: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 5px 8px 0px rgba(0, 0, 0, 0.14),
			0px 1px 14px 0px rgba(0, 0, 0, 0.12);

		--elevation-6dp: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14),
			0px 1px 18px 0px rgba(0, 0, 0, 0.12);

		--elevation-8dp: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14),
			0px 3px 14px 2px rgba(0, 0, 0, 0.12);

		--elevation-16dp: 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14),
			0px 6px 30px 5px rgba(0, 0, 0, 0.12);

		--elevation-24dp: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14),
			0px 9px 46px 8px rgba(0, 0, 0, 0.12);
	}

	:global(html) {
		font-size: 62.5%;
	}

	:global(*) {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		font-family: 'Rubik', sans-serif;
		margin-block-start: 0;
		margin-block-end: 0;
		margin-inline-start: 0;
		margin-inline-end: 0;
	}

	:global(html),
	:global(body) {
		position: relative;
		width: 100vw;
		height: 100vh;
	}

	:global(button) {
		cursor: pointer;
		border: none;
		outline: none;
	}

	:global(body) {
		color: var(--font-color);
		font-size: 1.6rem;
		background-color: var(--background-color);
	}

	:global(.mr4) {
		margin-right: 0.4rem;
	}

	:global(.icon-bold) {
		stroke-width: 0.35rem;
	}
</style>
