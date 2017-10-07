# === T3v Content Constants ===

plugin {
  tx_t3vcontent {
    persistence {
      # cat=plugin/tx_t3vcontent/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vcontent/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/

      # cat=plugin/tx_t3vcontent/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_content/Resources/Private/Templates/

      # cat=plugin/tx_t3vcontent/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_content/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}