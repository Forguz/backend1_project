<script>
  import Icon from 'svelte-icons-pack/Icon.svelte';
  export let placeholder;
  export let type;
  export let IconSvg;
</script>

<div>
  {#if IconSvg}
    <Icon className="icon mr4" src={IconSvg} size={16} />
  {/if}
  <input type={type} {placeholder}>
</div>

<style>
  div {
    background: var(--background-color);
    border-radius: 1rem;
    border: .2rem solid var(--background-color);
    color: var(--font-color);
    padding: .8rem;
    width: 100%;
    align-items: center;
    display: flex;
  }
  input {
    flex: 1;
    background: transparent;
    border: 0;
    color: currentColor;
    outline: none;
    margin-left: .4rem;
  }

  input::placeholder {
    color: #666360;
  }
</style>