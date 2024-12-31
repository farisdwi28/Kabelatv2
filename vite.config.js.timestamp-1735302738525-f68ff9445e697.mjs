// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/Kabelatv2/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/Kabelatv2/node_modules/laravel-vite-plugin/dist/index.js";
import { viteStaticCopy } from "file:///C:/laragon/www/Kabelatv2/node_modules/vite-plugin-static-copy/dist/index.js";
var vite_config_default = defineConfig({
  build: {
    manifest: true,
    rtl: true,
    outDir: "public/build/",
    cssCodeSplit: true
  },
  plugins: [
    viteStaticCopy({
      targets: [
        {
          src: "resources/css",
          dest: "css"
        },
        {
          src: "resources/fonts",
          dest: ""
        },
        {
          src: "resources/img",
          dest: ""
        },
        {
          src: "resources/js",
          dest: ""
        },
        {
          src: "resources/scss",
          dest: ""
        }
      ]
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxLYWJlbGF0djJcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIkM6XFxcXGxhcmFnb25cXFxcd3d3XFxcXEthYmVsYXR2MlxcXFx2aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vQzovbGFyYWdvbi93d3cvS2FiZWxhdHYyL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XHJcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xyXG5pbXBvcnQgeyB2aXRlU3RhdGljQ29weSB9IGZyb20gJ3ZpdGUtcGx1Z2luLXN0YXRpYy1jb3B5J1xyXG5cclxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcclxuICAgIGJ1aWxkOiB7XHJcbiAgICAgICAgbWFuaWZlc3Q6IHRydWUsXHJcbiAgICAgICAgcnRsOiB0cnVlLFxyXG4gICAgICAgIG91dERpcjogJ3B1YmxpYy9idWlsZC8nLFxyXG4gICAgICAgIGNzc0NvZGVTcGxpdDogdHJ1ZSxcclxuICAgICAgICBcclxuICAgIH0sXHJcbiAgICBwbHVnaW5zOiBbXHJcbiAgICAgICAgXHJcbiAgICAgICAgdml0ZVN0YXRpY0NvcHkoe1xyXG4gICAgICAgICAgICB0YXJnZXRzOiBbXHJcbiAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgc3JjOiAncmVzb3VyY2VzL2NzcycsXHJcbiAgICAgICAgICAgICAgICAgICAgZGVzdDogJ2NzcydcclxuICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICAgICAgc3JjOiAncmVzb3VyY2VzL2ZvbnRzJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnJ1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvaW1nJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnJ1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgICAgICBzcmM6ICdyZXNvdXJjZXMvanMnLFxyXG4gICAgICAgICAgICAgICAgICAgIGRlc3Q6ICcnXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgICAgIHNyYzogJ3Jlc291cmNlcy9zY3NzJyxcclxuICAgICAgICAgICAgICAgICAgICBkZXN0OiAnJ1xyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXSxcclxuICAgICAgICB9KVxyXG4gICAgXSxcclxufSk7XHJcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBa1EsU0FBUyxvQkFBb0I7QUFDL1IsT0FBTyxhQUFhO0FBQ3BCLFNBQVMsc0JBQXNCO0FBRS9CLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLE9BQU87QUFBQSxJQUNILFVBQVU7QUFBQSxJQUNWLEtBQUs7QUFBQSxJQUNMLFFBQVE7QUFBQSxJQUNSLGNBQWM7QUFBQSxFQUVsQjtBQUFBLEVBQ0EsU0FBUztBQUFBLElBRUwsZUFBZTtBQUFBLE1BQ1gsU0FBUztBQUFBLFFBQ0w7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxRQUNBO0FBQUEsVUFDSSxLQUFLO0FBQUEsVUFDTCxNQUFNO0FBQUEsUUFDVjtBQUFBLFFBQ0E7QUFBQSxVQUNJLEtBQUs7QUFBQSxVQUNMLE1BQU07QUFBQSxRQUNWO0FBQUEsUUFDQTtBQUFBLFVBQ0ksS0FBSztBQUFBLFVBQ0wsTUFBTTtBQUFBLFFBQ1Y7QUFBQSxNQUNKO0FBQUEsSUFDSixDQUFDO0FBQUEsRUFDTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
