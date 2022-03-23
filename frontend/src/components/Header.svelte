<script>
  import { getContext } from 'svelte';
  import { navigate } from 'svelte-routing';
  import IconButton from './shared/IconButton.svelte';
  import FiShoppingCart from 'svelte-icons-pack/fi/FiShoppingCart';
  import FiUser from 'svelte-icons-pack/fi/FiUser';
  import FiSearch from 'svelte-icons-pack/fi/FiSearch';
  import Hamburguer from "./shared/Hamburguer.svelte";
  import Input from './shared/Input.svelte';

  const { toggleMenu } = getContext('menu');

  function handleUserClick() {
    navigate('/sign', { replace: true })
  }
</script>

<header>
  <div class='top-header'>
    <h1>Flash Express</h1>
    <div class="cart-container">
      <IconButton icon={FiShoppingCart} size="32" />
    </div>
    <div class="cart-container">
      <IconButton icon={FiUser} on:click={handleUserClick} size="32" />
    </div>
    <div class="hamburguer">
      <Hamburguer on:activate={toggleMenu}/>
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
    padding: .8rem;
    align-items: center;
    flex-direction: column;
    color: var(--accent-color);
  }
  .top-header {
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-around;
    align-items: center;
    margin-bottom: .8rem;
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
    padding: .8rem;
  }
  .cart-container {
    align-items: center;
    justify-content: center;
  }
</style>
