<script>
  import ProductCard from '$lib/shared/ProductCard.svelte';

  // const srcImage = '../components/download.jpeg'
  const productName = 'ASUS GEFORCE RTX 3090'
  const products = [
    1,
    2,
    3,
    4
  ]
</script>

<svelte:head>
  <title>home</title>
</svelte:head>
<section>
  <h2>Placas de Video</h2>
  <div class="card-wrapper">
    {#each products as product }
      <ProductCard name={productName}/>
    {/each}
  </div>
</section>
<section>
  <h2>Placas de Video</h2>
  <div class="card-wrapper">
    {#each products as product }
      <ProductCard name={productName}/>
    {/each}
  </div>
</section>
<section>
  <h2>Placas de Video</h2>
  <div class="card-wrapper">
    {#each products as product }
      <ProductCard name={productName}/>
    {/each}
  </div>
</section>

<style>
  section {
    position: relative;
  }
  h2 {
    display: block;
    padding: 1rem;
    position: relative;
  }
  .card-wrapper {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-block-end: 1rem;
    overflow-x: scroll;
    overflow-y: visible;
  }
</style>