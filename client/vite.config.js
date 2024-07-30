import { defineConfig } from "vite";

export default defineConfig({
  build: {
    lib: {
      entry: "./index.js",
      name: "",
      formats: ["es"],
      fileName: (format) => `.js`,
    },
    outDir: "./dist/",
    emptyOutDir: true,
  },
});
