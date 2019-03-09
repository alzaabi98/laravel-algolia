<template>
  <ais-index app-id="9SLSAP8FPB" api-key="614f35ed2e128609620c068dc4acf748" index-name="users">
    <ais-input placeholder="Search articles..."></ais-input>

    <ais-results>
      <template slot-scope="{ result}">
        <div>
          <h2>{{ result.name}}</h2>
          <h4>{{ result.email}}</h4>
        </div>
      </template>
    </ais-results>
  </ais-index>
</template>

<script>
export default {};
</script>

<style>
</style>
