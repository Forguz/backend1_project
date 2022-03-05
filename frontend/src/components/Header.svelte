<script>
  import { getContext } from 'svelte'
  import Icon from 'svelte-icons-pack/';
  import FiShoppingCart from 'svelte-icons-pack/fi/FiShoppingCart';
  import FiSearch from 'svelte-icons-pack/fi/FiSearch';
  import Hamburguer from "./shared/Hamburguer.svelte";
  import Input from './shared/Input.svelte';

  const { toggleMenu, isMenuVisible } = getContext('menu');
</script>

<header>
  <h1>FE</h1>
  <div class="search">
    <Input class="input" IconSvg={FiSearch} type="search" placeholder="Search a product"/>
  </div>
  <div class="cart-container">
    <Icon class="icon" src={FiShoppingCart} size="32" />
  </div>
  <div class="hamburguer">
    <Hamburguer on:activate={() => console.log('DSADOKS')} active={$isMenuVisible}/>
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

  header > h1 {
    margin-inline-end: .8rem;
  }
  .search {
    display: flex;
    flex: 1;
    margin-left: .8rem;
  }

  .hamburguer {
    display: flex;
    margin: 1rem;
    justify-content: center;
    align-items: center;
  }
  .cart-container {
    align-items: center;
    justify-content: center;
    height: 100%;
    margin-left: 1rem;
  }
</style>
