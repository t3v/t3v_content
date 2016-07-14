# === Fluid Styled Content (fluid_styled_content) ===

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

# === Grid Elements (gridelements) ===

<INCLUDE_TYPOSCRIPT: source="FILE: EXT:gridelements/Configuration/TypoScript/setup.ts">