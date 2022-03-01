<script>
  import { getContext } from 'svelte'
  import Hamburguer from "./shared/Hamburguer.svelte";
  import Input from './shared/Input.svelte';

  const { toggleMenu, isMenuVisible } = getContext('menu');
</script>

<header>
  <div class="hamburguer">
    <Hamburguer on:click={toggleMenu} active={$isMenuVisible}/>
  </div>
  <div class="content">
    <h2>Flash Express</h2>
    <Input type="search" placeholder="Search a product"/>
  </div>
</header>

<style>
  header {
    display: flex;
    background-color: var(--primary-color);
    box-shadow: var(--elevation-4dp);
  }
  .hamburguer {
    margin: 1rem;
  }

  .content {
    display: flex;
    flex-direction: column;
    margin-bottom: .8rem;
  }

  .content h2 {
    padding: .6rem 0;
  }

</style>
