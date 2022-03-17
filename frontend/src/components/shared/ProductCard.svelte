<script>
  import Button from "../shared/Button.svelte";
  export let image_src;
  export let image_alt;
  export let name;
  export let price = 'R$ 14,999,99';
</script>

<div class="card">
  <div class="image">
    <img src={image_src} alt={image_alt} />
  </div>
  <div class="content">
    <p class="price">{price}</p>
    <p class="name">{name}</p>
  </div>
</div>

<style>
  :root {
    --card-width: 16rem;
  }
  .card {
    cursor: pointer;
    font-size: 1.2rem;
    display: flex;
    flex-direction: column;
    max-height: 100%;
    width: var(--card-width);
    min-width: var(--card-width);
    border-radius: 0.6rem;
    box-shadow: var(--elevation-1dp);
    transition: box-shadow 0.2s;
    overflow: hidden;
    margin: .8rem;
  }

  .card:hover {
    box-shadow: var(--elevation-8dp);
  }
  .image {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    /* border-bottom: 1px solid rgb(212, 209, 209); */
    flex: 1;
  }
  img {
    flex-shrink: 0;
    max-width: var(--card-width);
    width: 100%;
    object-fit: fill;
  }

  .content {
    display: flex;
    flex-direction: column;
    padding: .8rem;
    flex: 3;
  }

  .content p {
    color: rgb(26, 24, 24);
  }

  .content > .name {
    margin-top: .6rem;
  }

  .content > .price {
    font-size: 1.6rem;
  }
</style>
