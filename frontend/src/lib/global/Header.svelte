<script>
  import { getContext } from 'svelte';
  import { goto } from '$app/navigation';
  // import { navigate } from 'svelte-routing';
  import FiShoppingCart from 'svelte-icons-pack/fi/FiShoppingCart';
  import FiUser from 'svelte-icons-pack/fi/FiUser';
  import FiSearch from 'svelte-icons-pack/fi/FiSearch';
  import IconButton from '../shared/IconButton.svelte';
  import Hamburguer from "../shared/Hamburguer.svelte";
  import Input from '../shared/Input.svelte';

  const { toggleMenu } = getContext('menu');

  function handleUserClick() {
    goto('/sign');
  }
</script>

<header>
  <div class='top-header'>
    <div class="title">
      <div class="hamburguer">
        <Hamburguer on:activate={toggleMenu}/>
      </div>
      <h1>Flash Express</h1>
    </div>
    <div class="options">
      <div class="cart-container">
        <IconButton icon={FiShoppingCart} size="24" />
      </div>
      <div class="cart-container">
        <IconButton icon={FiUser} on:click={handleUserClick} size="24" />
      </div>
    </div>
  </div>
  <div class="search">
    <Input class="input" IconSvg={FiSearch} type="search" placeholder="Search a product"/>
  </div>
</header>

<style>
  header {
    display: flex;
    background-color: var(--primary-color);
    box-shadow: var(--elevation-4dp);
    flex: 1;
    z-index: 9;
    padding: .8rem;
    align-items: center;
    flex-direction: column;
    color: var(--accent-color);
  }
  .top-header {
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    margin-bottom: .4rem;
  }
  .top-header h1 {
    margin-left: 1rem;
    font-size: 1.5em;
    justify-self: start;
  }

  .title {
    display: flex;
    align-items: center;
  }
  .options {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .search {
    display: flex;
    width: 100%;
    justify-content: space-between;
  }
  .hamburguer {
    display: flex;
    justify-content: center;
    align-items: center;
    /* padding: .4rem; */
    height: 3.5rem;
    width: 3.2rem
  }
  .cart-container {
    align-items: center;
    justify-content: center;
    margin-right: .8rem;
  }
</style>
