<script>
  import { getContext } from 'svelte'
  import Icon from 'svelte-icons-pack/';
  import FiShoppingCart from 'svelte-icons-pack/fi/FiShoppingCart';
  import Hamburguer from "./shared/Hamburguer.svelte";
  import Input from './shared/Input.svelte';

  const { toggleMenu, isMenuVisible } = getContext('menu');
</script>

<header>
  <h2>FE</h2>
  <div class="search">
    <Input class="input" IconSvg={FiShoppingCart} type="search" placeholder="Search a product"/>
  </div>
  <div class="hamburguer">
    <Hamburguer on:click={toggleMenu} active={$isMenuVisible}/>
  </div>
  <div class="cart-container">
    <Icon class="icon" src={FiShoppingCart} size="32" />
  </div>
</header>

<style>
  header {
    display: flex;
    background-color: var(--primary-color);
    box-shadow: var(--elevation-4dp);
    flex: 1;
    padding: .8rem;
    align-items: center;
    color: var(--accent-color);
  }

  header > h2 {
    margin-inline-end: .8rem;
  }
  .search {
    display: flex;
    align-items: stretch;
    flex: 1;
  }

  .hamburguer {
    display: flex;
    margin: 1rem;
    margin-bottom: 1.4rem;
    justify-content: flex-end;
    align-items: flex-end;
  }
  .cart-container {
    align-items: center;
    justify-content: center;
  }
</style>
