import '/flutter_flow/flutter_flow_util.dart';
import 'edit_pass_widget.dart' show EditPassWidget;
import 'package:flutter/material.dart';

class EditPassModel extends FlutterFlowModel<EditPassWidget> {
  ///  State fields for stateful widgets in this page.

  final unfocusNode = FocusNode();
  // State field(s) for OldPassword widget.
  FocusNode? oldPasswordFocusNode1;
  TextEditingController? oldPasswordTextController1;
  late bool oldPasswordVisibility1;
  String? Function(BuildContext, String?)? oldPasswordTextController1Validator;
  // State field(s) for OldPassword widget.
  FocusNode? oldPasswordFocusNode2;
  TextEditingController? oldPasswordTextController2;
  late bool oldPasswordVisibility2;
  String? Function(BuildContext, String?)? oldPasswordTextController2Validator;
  // State field(s) for OldPassword widget.
  FocusNode? oldPasswordFocusNode3;
  TextEditingController? oldPasswordTextController3;
  late bool oldPasswordVisibility3;
  String? Function(BuildContext, String?)? oldPasswordTextController3Validator;

  @override
  void initState(BuildContext context) {
    oldPasswordVisibility1 = false;
    oldPasswordVisibility2 = false;
    oldPasswordVisibility3 = false;
  }

  @override
  void dispose() {
    unfocusNode.dispose();
    oldPasswordFocusNode1?.dispose();
    oldPasswordTextController1?.dispose();

    oldPasswordFocusNode2?.dispose();
    oldPasswordTextController2?.dispose();

    oldPasswordFocusNode3?.dispose();
    oldPasswordTextController3?.dispose();
  }
}
