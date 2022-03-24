<script>
  import Button from '$lib/shared/Button.svelte';
import { createEventDispatcher } from 'svelte';
  import Input from '../shared/Input.svelte';
  const dispatch = createEventDispatcher();

  function displaySignIn() {
    dispatch('gotosignin', 'signin');
  }

  function handleFormSubmit() {
    console.log('submit');
  }
</script>

<form on:submit|preventDefault={handleFormSubmit}>
  <h1>Create your credentials to signup</h1>
  <!-- svelte-ignore a11y-invalid-attribute -->
  <p>already have an account? <a href="" on:click={displaySignIn}>click here to login.</a></p>

  <label for="username">Username</label>
  <Input class="margin-bottom" id="username" placeholder="Type your username" type="text" name="username" />

  <label for="email">E-mail</label>
  <Input class="margin-bottom" id="email" placeholder="Type your email" type="email" name="email" />

  <label for="password">Password</label>
  <Input class="margin-bottom" id="password" placeholder="Type your password" type="password" name="password" />

  <Button type="submit">Sign up</Button>
</form>

<style>
  form {
    padding: 1.6rem;
  }

  form p {
    margin-bottom: 1.6rem;
  }
</style>