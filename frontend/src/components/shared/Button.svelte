<button>
  <slot></slot>
</button>

<style>
  button {
    border: .1rem solid #000;
    padding: 1rem 2rem;
    box-shadow:  var(--elevation-2dp);
    border-radius: .6rem;
    transition: box-shadow .2s;
  }

  button:hover {
    box-shadow: var(--elevation-8dp);
  }

  button:active {
    box-shadow: none;
  }
</style>