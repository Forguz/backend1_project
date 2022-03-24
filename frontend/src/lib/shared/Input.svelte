<script>
  import Icon from 'svelte-icons-pack/Icon.svelte';
  export let placeholder;
  export let type;
  export let IconSvg = null;
  export let name;
  export let id;
  export { className as class }
  let className = '';
</script>

<div class='container' class:margin-bottom={className === 'margin-bottom'}>
  {#if IconSvg}
    <label for="input">
      <Icon className="icon" src={IconSvg} size={'16'} />
    </label>
  {/if}
  <input {id} {type} {name} {placeholder}>
</div>

<style>
  div {
    background: var(--background-color);
    border-radius: .6rem;
    border: .2rem solid var(--font-color);
    color: var(--font-color);
    width: 100%;
    align-items: center;
    display: flex;
    overflow: hidden;
  }
  label {
    display: flex;
    height: 100%;
    justify-content: center;
    align-items: center;
    padding-left: 1rem;
  }
  input {
    flex: 1;
    background: transparent;
    border: 0;
    color: currentColor;
    outline: none;
    margin-left: .4rem;
    padding: .8rem;
    padding-left: .6rem;
  }
  input::placeholder {
    color: #666360;
  }
  .margin-bottom {
    margin-bottom: .8rem;
  }
</style>