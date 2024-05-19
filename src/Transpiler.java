import jamiebalfour.zpe.PHPTranspiler;
import jamiebalfour.zpe.core.IAST;
import jamiebalfour.zpe.interfaces.ZPESyntaxTranspiler;

public class Transpiler implements ZPESyntaxTranspiler {

  @Override
  public String transpile(IAST code, String s) {

    return new PHPTranspiler().Transpile(code, s);

  }

  @Override
  public String getLanguageName() {
    return "PHP";
  }

  @Override
  public String getFileExtension() {
    return "php";
  }
}