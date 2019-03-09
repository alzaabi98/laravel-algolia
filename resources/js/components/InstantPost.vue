<template>
  <ais-index app-id="9SLSAP8FPB" api-key="614f35ed2e128609620c068dc4acf748" index-name="posts">
    <ais-input placeholder="enter a word to search"></ais-input>

    <ais-results>
      <template slot-scope=" { result}">
        <div>
          <h2>{{ result.title}}</h2>
        </div>
      </template>
    </ais-results>
  </ais-index>
</template>
