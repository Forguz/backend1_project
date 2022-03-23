<script>
  import { Router, Route } from 'svelte-routing';
  import routes, { signInRoute } from '.';
  export let url = '';
</script>

<Router {url}>
  {#each routes as {route, page}}
    <Route path={route} component={page}/>
  {/each}
  <Route path={signInRoute.route} component={signInRoute.page} />
</Router>