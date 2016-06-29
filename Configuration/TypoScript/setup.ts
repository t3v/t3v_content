# Vendor
# ======

# Fluid Styled Content (fluid_styled_content)
# -------------------------------------------

<INCLUDE_TYPOSCRIPT: source="FILE: EXT:fluid_styled_content/Configuration/TypoScript/Static/setup.txt">

lib {
  fluidContent {
    layoutRootPaths {
      # 0 = EXT:fluid_styled_content/Resources/Private/Layouts/
      10 = {$lib.fluidContent.layoutRootPath}
    }

    templateRootPaths {
      # 0 = EXT:fluid_styled_content/Resources/Private/Templates/
      10 = {$lib.fluidContent.templateRootPath}
    }

    partialRootPaths {
      # 0 = EXT:fluid_styled_content/Resources/Private/Partials/
      10 = {$lib.fluidContent.partialRootPath}
    }
  }
}

# Plugin configuration
# ====================

plugin {
  tx_t3vcontent {
    settings {
      # ...
    }

    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 0

      # storagePid = {$plugin.tx_t3vcontent.persistence.storagePid}
    }

    view {
      layoutRootPath = {$plugin.tx_t3vcontent.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vcontent.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vcontent.view.partialRootPath}
    }
  }
}