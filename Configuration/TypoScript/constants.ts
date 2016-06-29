# Vendor
# ======

# Fluid Styled Content (fluid_styled_content)
# -------------------------------------------

<INCLUDE_TYPOSCRIPT: source="FILE: EXT:fluid_styled_content/Configuration/TypoScript/Static/constants.txt">

lib {
  fluidContent {
    layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/FluidStyledContent/

    templateRootPath = EXT:t3v_content/Resources/Private/Templates/FluidStyledContent/

    partialRootPath = EXT:t3v_content/Resources/Private/Partials/FluidStyledContent/
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
  }
}