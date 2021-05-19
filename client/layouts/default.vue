<template>
  <v-app>
    <v-main>
      <v-container>
        <nuxt />
      </v-container>
    </v-main>
    <v-bottom-navigation :value="value" color="primary" horizontal grow>
      <v-btn to="/">
        <span>Recents</span>

        <v-icon>mdi-history</v-icon>
      </v-btn>
      <v-btn to="/admin">
        <span>Favorites</span>

        <v-icon>mdi-heart</v-icon>
      </v-btn>
    </v-bottom-navigation>
  </v-app>
</template>
