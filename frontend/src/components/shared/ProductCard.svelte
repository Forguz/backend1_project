<script>
  import Button from "../shared/Button.svelte";
  export let image;
  export let name;
</script>

<div class="card">
  <div class="image">
    <img src={image} alt={image} />
  </div>
  <div class="content">
    <p>{name}</p>
    <p>R$ 14,999,99</p>
  </div>
</div>

<style>
  .card {
    font-size: 1.2rem;
    display: flex;
    flex-direction: column;
    max-height: 100%;
    max-width: 22rem;
    border-radius: 0.6rem;
    box-shadow: var(--elevation-1dp);
    transition: box-shadow 0.2s;
    overflow: hidden;
    margin: 1.2rem;
  }

  .card:hover {
    box-shadow: var(--elevation-8dp);
  }
  .image {
    flex: 1;
  }
  img {
    max-width: 100%;
    object-fit: fill;
  }

  .content {
    flex: 3;
  }
</style>
