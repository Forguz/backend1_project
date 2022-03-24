<script>
  import { createEventDispatcher } from 'svelte';
  const dispatch = createEventDispatcher();
  import Button from '$lib/shared/Button.svelte';
  import Input from '$lib/shared/Input.svelte';

  function displaySignUp() {
    dispatch("gotosignup", 'signup');
  }

  function handleFormSubmit() {
    console.log('submit');
  }
</script>

<form on:submit|preventDefault={handleFormSubmit}>
  <h1>Enter with your credentials to login.</h1>
  <!-- svelte-ignore a11y-invalid-attribute -->
  <p>or <a href="" on:click={displaySignUp}>create an account</a> if you don't have</p>
  <label for="username">Username</label>
  <Input class="margin-bottom" id="username" placeholder="Type your username" type="text" name="username" />

  <label for="password">Password</label>
  <Input class="margin-bottom" id="password" placeholder="Type your password" type="password" name="password" />

  <Button type="submit" class="margin-top">Sign In</Button>
</form>

<style>
  form {
    padding: 1.6rem;
  }
  form p {
    margin-bottom: 1.6rem;
  }
</style>