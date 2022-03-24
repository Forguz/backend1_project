<script>
  import SignIn from '$lib/forms/SignIn.svelte';
  import SignUp from '$lib/forms/SignUp.svelte';

  let signInOrSignUp = 'signin'

  /**
* @param {{ detail: string; }} event
*/
  function handleScreenChange(event) {
    signInOrSignUp = event.detail;
  }
</script>

<svelte:head>
  {#if signInOrSignUp === 'signin'}
    <title>FE | Sign In</title>
  {:else}
    <title>FE | Sign Up</title>
  {/if}
</svelte:head>
{#if signInOrSignUp === 'signin'}
  <SignIn on:gotosignup={handleScreenChange} />
{:else}
  <SignUp on:gotosignin={handleScreenChange} />
{/if}

<style>
</style>