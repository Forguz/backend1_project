<script>
  import Icon from 'svelte-icons-pack';
  export let icon;
  export let size = '32';
</script>

<button on:click>
  <Icon class="icon" src={icon} size={size} />
</button>

<style>
  button {
    padding: .8rem;
    display: block;
    border-radius: 50%;
    color: var(--accent-color);
    background-color: transparent;
    transition: background-color .1s;
  }
  button:hover {
    background-color: #ffffff23;
  }
</style>